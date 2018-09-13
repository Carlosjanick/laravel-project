<?php
namespace Classes;

//serve para servir atributos e metodos para suas filhas
abstract class Abstracao{//abstraçao nao pode mas ter objetos a instacialá apenas servir como Herança
    public $Cliente;
    public $Conta;//vai servir apenas para as filha identificaremm o tipo de conta
    public $Saldo;
    
    function __construct(string $Cliente, float $Saldo) {
        $this->Cliente = $Cliente;
        $this->Saldo = $Saldo;
    }
    
    public function Depositar(float $Valor) {
        $this->Saldo += (float) $Valor;
        echo "<span style='color:green'><b>{$this->Conta}:</b> Deposito de {$this->Real($Valor)} efectuado com sucesso</span><br>";
    }
    
    public function Retirar(float $Valor) {
        $this->Saldo -= $Valor;
        echo "<span style='color:red'><b>{$this->Conta}:</b> Levantamento de {$this->Real($Valor)} efectuado com sucesso</span><br>";
    }
    
    /** @param Abstracao $Destino */
    public function Transferir(float $Valor, object $Destino) {
        //nao deixar Transferir para uma mesma conta
        if($this === $Destino)://tiver os mesmos valores ou ser do mesmo tipo ou ainda dentro de uma classe do mesmo objecto nao pode aceitar
            echo "Voce nao pode Tranferir Valores para a mesma conta!"; 
        else:
            echo "<hr>";
            $this->Retirar($Valor);
            $Destino->Depositar($Valor);
             echo "<span style='color:blue'><b>{$this->Conta}:</b> Transferencia de {$this->Real($Valor)} efectuado com sucesso de {$this->Cliente} para {$Destino->Cliente}</span><br>";
            echo "<hr>";
        endif;
    }

    public function Extrato() {
        echo "<hr><hr> Olá {$this->Cliente}.  Seu saldo em {$this->Conta} é de {$this->Real($this->Saldo)} <hr>";
    }
    
    //metodo abstrato
    abstract public function verSaldo(); //metodo abstrato nao pode ter corpo
    //obriga qualquer classe que herde ele a construir/implementar esse metodo
    
    public function Real(float $Valor) : string{
        return number_format($Valor, '2', '.', ',') . "$00";
    }
}
