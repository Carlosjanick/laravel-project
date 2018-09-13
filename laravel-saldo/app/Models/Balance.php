<?php

namespace App\Models;
use App\User;

use Illuminate\Database\Eloquent\Model;
use DB;

class Balance extends Model
{
    //indica que não vai trabalhar com timestamp
    public $timestamps = false;

    //logica
    /**
     * recebe o amount e faz toda a logica de imcrementar
     *
     * @param [type] $amount
     * @return Array
     */
    public function deposit (float $amount) : Array {
        //antes de iniciar qualquer transação
        DB::beginTransaction();

        $user_id = auth()->user()->id;  //recupera o id do utilizador

        $totalBefore = $this->amount ? $this->amount : 0;   //guarda o total da conta antes da recarga.
        $this->amount += number_format($amount, 2, '.', '');
        $deposit = $this->save();  //salva os dados (atualiza o campo amount)
        
        //historics
        $userHistory = auth()->user()->historics();//recupera o utilizador logado pega uma instancia do historic atravez do metodo do relacionamento para adicionar dados
        $historic = $userHistory->create([   
            'user_id'              => $user_id, 
            'type'                 => 'I', 
            'amount'               => $amount, 
            'total_before'         => $totalBefore,
            'total_after'          => $this->amount, 
            //'user_id_transaction'  => ,
            'date'                 => date('Ymd')
        ]);

        if ($deposit && $historic) {
            DB::commit(); //faz realmente as açoes acontecerem
            return [
                'success'  => true,
                'message'  => 'Sucesso ao recarregar'
            ];


        }else{
            DB::rollback();//se der erro faz p rollback , voltar ao estado normal
            return [
                'success'  => false,
                'message'  => 'Erro ao recarregar'
            ];
        }
    }

    /**
     * responsavel pela logica de retirada (levantamento de saldo)
     *
     * @param float $amount
     * @return Array
     */
    public function retirada(float $amount) : Array
    {
        //dd($amount);
        //verificar se o saldo dele é maior ou igual ao valor a retirar
        if($this->amount < $amount)
        {
            return [
                'success'   => false,
                'message'   => 'Saldo insuficiente'
            ];
        }

        DB::beginTransaction();

        $user_id = auth()->user()->id;  //recupera o id do utilizador
        $totalBefore = $this->amount;   //saldo atual

        //retirada
        $this->amount -= number_format($amount, 2, '.', '');
        $retirada = $this->save(); //salva os dados (atualiza o campo amount)
        
        //registar historico
        $userHistorics = auth()->user()->historics(); //recupera o utilizador logado pega uma instancia do historic atravez do metodo do relacionamento para adicionar dados
        $historic = $userHistorics->create([
            'user_id'              => $user_id, 
            'type'                 => 'O', 
            'amount'               => $amount, 
            'total_before'         => $totalBefore,
            'total_after'          => $this->amount, 
            //'user_id_transaction'  => ,
            'date'                 => date('Ymd')
        ]);
        
        if($retirada && $historic){
            DB::commit();
            return [
                'success'  => true,
                'message'  => 'Sucesso ao retirar'
            ];
        }else{
            DB::rollback();
            return [
                'success'  => false,
                'message'  => 'Erro ao retirar'
            ];
        }
            
    }

    //transferencia de uma conta a outra
    public function transfer(float $amount, User $sender) : Array{  //recebe amount e objeto de utilizador para poder dpois atualizar seu saldo
        if($this->amount < $amount) { //verificar se o saldo é suficiente
            return [
                'success'   => false,
                'message'   => 'Saldo insuficiente'
            ];
        }

        DB::beginTransaction();
        /********************************************************
         * Atualiza o próprio saldo
         * *****************************************************/
        $user_id = auth()->user()->id;  //atual user
        $totalBefore = $this->amount ? $this->amount : 0;  //total antes
        
        $this->amount -= number_format($amount, 2, '.', '');  //dicrementa o saldo de quem envia para depois acrescentar a quem recebe
        $balanceProprio = $this->save(); //atualiza o saldo de quem envia
         
        //inseri o historico
        $userHistoric = auth()->user()->historics();
        $historicUser = $userHistoric->create([
            'user_id'              => $user_id, 
            'type'                 => 'T', 
            'amount'               => $amount, 
            'total_before'         => $totalBefore,
            'total_after'          => $this->amount, 
            'user_id_transaction'  => $sender->id,  //utilizador a receber a transferencia
            'date'                 => date('Ymd')
        ]);

        /********************************************************
         * Atualiza o saldo do recebedor
         * *****************************************************/
        $senderBalance = $sender->balance()->firstOrCreate([]); //recupera o saldo do recebedor se nao existir cria com saldo 0 e retorna se existir retorna o balance
        $senderTotalBefore = $senderBalance->amount ? $senderBalance->amount : 0; //total do recebedor antes
       
        $senderBalance->amount  += number_format($amount, 2, '.', ''); //incrementa o saldo de quem recebe
        $transferSender = $senderBalance->save(); //atualiza o saldo de quem recebe

        $senderHistoric = $sender->historics()->create([
            'user_id'              => $sender->id,  //utilizador que recebe a transferencia 
            'type'                 => 'I', 
            'amount'               => $amount, 
            'total_before'         => $senderTotalBefore,
            'total_after'          => $senderBalance->amount, 
            'user_id_transaction'  => $user_id,  //utilizador que fez a transferencia
            'date'                 => date('Ymd')
        ]);

        if($balanceProprio && $historicUser && $transferSender && $senderHistoric) { //verificar se foi registrado todos se nao rollback
            DB::commit();
            return [
                'success'  => true,
                'message'  => 'Sucesso ao transferir'
            ];
        }else{
            DB::rollback();

            return [
                'success' => false,
                'message' => 'Falha ao transferir'
            ];
        }


    }
}
