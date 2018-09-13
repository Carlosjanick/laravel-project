<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\MoneyValidationFormRequest;
use App\Http\Requests\SenderValidationFormRequest;
use App\Models\Historic;

class BalanceController extends Controller
{   
    /**
     * guarda a quantidade de itens por pagina na paginação de resultados
     *
     * @var integer
     */
    private $totalPage = 2; 

    /**
     * responsavel por mostrar a view de saldo recuperando o sando para ser mostrado
     *
     * @return void
     */
    public function index()
    {
        //pegar os dados do utilizador logado
        //dd(auth()->user());
        //dd(auth()->user()->name);
        $userBalance = auth()->user()->balance;  //funcao do relacionamento
        $balance = ( $userBalance ? $userBalance->amount : '0'); //se existir retorna senao retorna 0
        $balance = number_format($balance, 2, ',', '.');
        //dd($userBalance);
        return view('admin.balance.index', compact('balance'));
    }

    /**
     * retorna a view para recarga
     *
     * @return void
     */
    public function deposit()
    {
        return view('admin.balance.deposit');
    }

    /**
     * responsavel por enviar os dados para gravação
     *
     * @return void
     */
    public function depositStore(MoneyValidationFormRequest $request) //em vez do request normal recebe o request criado para validação
    {
       // dd($request->all());
       // $amount = $request->amount;
       // dd($amount);

       $balance = auth()->user()->balance()->firstOrCreate([]);  //recupera o balance do utilizador logado, se nao existir cria e devolve se existir so devolve.
       $resposta = $balance->deposit($request->amount);  //o balance recuperado chama a funçao da model para fazer as logicas e depositar o saldo.
       //retorno da model
       //dd($resposta); //array
       if ($resposta['success']) { //verificar se a resposta é true
         return redirect()
                ->route('admin.balance')
                ->with('success', $resposta['message']);
       }else{
           return redirect()
                  ->route('admin.balance')
                  ->with('error', $resposta['message']);
       }

    }

    /**
     * retorna a view de sacar (pegar) saldo
     *
     * @return void
     */
    public function withdrawn()
    {
        return view('admin.balance.withdrawn');
    }

    /**
     * responsavel pelo estore dos dados de levantamento na conta
     *
     * @return void
     */
    public function withdrawnStore(MoneyValidationFormRequest $request)
    {
        //dd($request->all());
        $balance = auth()->user()->balance; //recupera o saldo do utilizador
        $resposta = $balance->retirada($request->amount);  //chama a funcao do modelo responsavel pela retirada e envia o saldo a retirar

        //retorno da model
        //dd($resposta);
        if ($resposta['success']) { //verificar se a resposta é true
            return redirect()
                    ->route('admin.balance')
                    ->with('success', $resposta['message']);
        }else{
            return redirect()
                    ->route('admin.balance')
                    ->with('error', $resposta['message']);
        }
    }

    /**
     * retorna a view de transferir saldo
     *
     * @return void
     */
    public function transfer()
    {
        return view('admin.balance.transfer');
    }

    /**
     * responsavel por receber e mostrar os dados do utilizador a receber saldo 
     * e recarregar a view com os dados recuperados da tela de comfirmação
     *
     * @return void
     */
    public function confirmTransfer(SenderValidationFormRequest $request, User $user)
    {
        //dd($request->all());
        $sender = $user->getSender($request->sender); //recupera a instancia user e chama o metodo da model user passando os dados
        //dd($sender);

        if(! $sender) {  //se nao retornar informação da model
            return redirect()
                  ->back()
                  ->with('error', 'Utilizador informado não foi encontrado!');
        }elseif($sender->id === auth()->user()->id){ //evitar transferencia para ele mesmo
            return redirect()
                ->back()
                ->with('error', 'Não pode transferir para voce mesmo!');
        }else{
            //recupera o saldo do utilizador logado
            $balance = (auth()->user()->balance ? auth()->user()->balance : 0);

            return view('admin.balance.transfer-confirm', compact('sender', 'balance'));  //retorna a view de comfirmação passando os dados do utilizador a receber a transferencia
        }

        
    }

    /**
     * responsavel por fazer acontecer as transferencias, retirando de uma conta e colocando na outra
     * @return void
     */

    public function transferStore (MoneyValidationFormRequest $request, User $user)
    {
        //recupera o utilizador a receber saldo atravez do campo hiddem do formulario
        $sender = $user->find($request->sender_id);
        if(! $sender){ //se nao existir
            return redirect()
                ->route('balance.transfer')
                ->with('error', 'O utilizador informado não encontrado!');
        }else{  //se existir chama o metodo transfer
            $balance = auth()->user()->balance;
            $resposta = $balance->transfer($request->amount,  $sender);  //recebe o valor e quem vai receber
    
            if ($resposta['success']) { //verificar se a resposta é true
                return redirect()
                        ->route('admin.balance')
                        ->with('success', $resposta['message']);
            }else{
                return redirect()
                        ->route('admin.balance')
                        ->with('error', $resposta['message']);
            }
        }
    }


    /**
     * responsavel por carregar a view de historico e apresentar os dados 
     *
     * @return void
     */
    public function historics(Historic $historic)
    {
        //recuperrar o historico do utilizador
        //$historics = auth()->user()->historics()->get();
        //$historics = auth()->user()->historics;
        //$historics = auth()->user()->historics()->with(['userSender'])->get();  // with('userSender') ou winth([]) nome do metodo que faz relacionamento traz os historicos e o relacionamento inverso user do historico

        //foreach($historics as $historic){  #para cada linha traz o relacionamento inverso
            //dd($historic->user->name);
        //
        $historics = auth()->user()
                            ->historics()
                            ->with(['userSender'])
                            ->paginate($this->totalPage); # -- paginação  --quantidade por pagina

        $types = $historic->type();  //pego uma instancia do historic para acessar o seu metodo  para recuperar os types atravez do metodo contido nele.

        //dd($types);
        //dd($historics);
        return view('admin.balance.historic', compact('historics', 'types'));
    }

    /**
     * Fazer todo filtro 
     *
     * @return void
     */
    public function searchHistorics(Request $request, Historic $historic) #-- Search
    {
        $dataForm = $request->except(['_token']);  # -- recuperra todos os campos do formulario excepto campo tokem
        $historics = $historic->search($dataForm, $this->totalPage); # -- passa a array para a model

        $types = $historic->type(); # --recuperra types para combobox
        return view('admin.balance.historic', compact('historics', 'types', 'dataForm')); # -- resolver problema de paginaçao quando estamos lendo e paginando , enviamos tambem para vista os dados do form
    }
}
