<?php
namespace Classes;

use Classes\Abstracao;

class AbstracaoCC extends Abstracao{
    public $Limite;
    
    public function __construct(string $Cliente, float $Saldo, float $Limite) {
        parent::__construct($Cliente, $Saldo);
        $this->Conta = "Conta Corrente";
        $this->Limite = (float) $Limite;
    }
    
    //reescreve o metodo da classe pai modificando apenas o comportamento overide
    final public function Retirar(float $Valor) {
        if($this->Saldo + $this->Limite >= (float) $Valor):
            parent::Retirar($Valor);
        else:
            echo "<span style='color:red'><b>{$this->Conta}:</b> Erro ao Retirar {$this->Real($Valor)} Saldo indisponivel</span><br>";
        endif;
    }
    
    
    
    /** @param Abstracao $Destino */
    final public function Transferir(float $Valor, object $Destino) {
        if ($this->Saldo + $this->Limite >= (float) $Valor):
            parent::Transferir($Valor, $Destino);
        else:
            echo "<span style='color:red'><b>{$this->Conta}:</b> Erro ao Transferir {$this->Real($Valor)} Saldo indisponivel</span><br>";
        endif;
    }

    public function verSaldo() {
        parent::Extrato();
    }

}
