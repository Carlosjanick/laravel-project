<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Historic extends Model
{
    //informar quais campos recebe quando usamos o array para informar dados a inserir ou atualizar
    protected $fillable = ['user_id', 'type', 'amount', 'total_before', 'total_after', 'user_id_transaction', 'date'];

    /**
     * relacionamento inverso utilizador do historico n-1
     *
     * @return void
     */
    public function user() # -- utilizador do historico
    {
        return $this->belongsTo(User::class);
    }

    /**
     * relacionamento que traz o utilizador ao qual fez a transferencia
     *
     * @return void
     */
    public function userSender() # -- utilizador que fez a transferencia
    {
        return $this->belongsTo(User::class, 'user_id_transaction');  #relacionamento pela coluna user_id_transaction para saber qual utilizador que fez a transferencia 
    }


    # -- podemos criar motator para formatar dados ao inserir ou recuperar
    # -- get para pegar na hora da saida e fazer algo getNomeCampoAttribute   ex getDateAttribute()
    # -- set para ao passar valor para modelo formatar

    /**
     * responsavel por formatar o valor do atributo date antes de sair
     *
     * @param [type] $value
     * @return void
     */
    public function getDateAttribute($value) 
    {
        return Carbon::parse($value)->format('d/m/Y');
    }

    /**
     * recebe o type e retorna o seu texto por extenso e se nao informar o type retorna a array de types .
     *
     * @param [type] $type
     * @return void
     */
    public function type( $type = null )
    {
        $types = [
            'I'     => 'Entrada',
            'O'     => 'Retirada',
            'T'     => 'Transferencia'
        ];

        # -- quando nao informar o type retorna a array de types
        if (! $type ) {
            return $types;
        }
        
        # -- verificar se é uma entrada para ele mesmo ou se foi uma entrada que outra pessoa fez para ele
        if( $this->user_id_transaction != null && $type === 'I' ) {  
             return 'Recebido';
        }
        
        # -- quando informar o type retorna o type pertencente
        return $types[$type];
    }


    #-- podemos criar escopo no laravel para reaproveitar query.
    public function scopeUserAuth($query)
    {
        return $query->where('user_id', auth()->user()->id);
    }

    /**
     * centraliza o search recebendo array de dados informado pelo controller que pega dos request...
     *
     * @return void
     */
    public function search(Array $data, $totalPage)
    {
       $query = $this->where(function($query) use ($data){  # -- utilizar variavel dentro função de callback -- usamos o use para passar para dentro
                
                if(isset($data['id'])){  # -- se existir id (for informado)
                    $query->where('id', $data['id']);    # -- continuação da query.
                }

                if(isset($data['date'])){  # -- se existir date (for informado)
                    $query->where('date', $data['date']);    # -- continuação da query.
                }

                if(isset($data['type'])){  # -- se existir type (for informado)
                    $query->where('type', $data['type']);    # -- continuação da query.
                }

        })#--->toSql()   --exibe debug do select
        ->UserAuth() #-- somente historicodo utilizador logado (vindo do escope que aproveita o codigo) nao precisando passar a palavra escope
        ->with(['userSender'])  #-- trazendo o utilizador que envio na consulta atravez do relacionamento inverso
        ->paginate($totalPage);  # -- pega uma instancia de historico e filtra.

        //dd($query);
        return $query;
    }

    

}
