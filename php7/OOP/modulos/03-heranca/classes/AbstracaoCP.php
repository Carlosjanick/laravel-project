<?php
namespace Classes;

use Classes\AbstracaoCC;

class AbstracaoCP extends AbstracaoCC{//herda da abstracaoocc que automaticamente herda da abstracao
    public $Rendimento;
    
    function __construct(string $Cliente, float $Saldo) {
        parent::__construct($Cliente, $Saldo, 0);//imformar que nao existe limite na conta poupança
        $this->Conta = 'Conta Poupança';
        $this->Rendimento = '1.7';
    }
    
    
   final public function Depositar(float $Valor) {
        $Juro = $Valor * ($this->Rendimento / 100);
        $Deposito = $Valor + $Juro;
        parent::Depositar($Deposito);
    }
}
