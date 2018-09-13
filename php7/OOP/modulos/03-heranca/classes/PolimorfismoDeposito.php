<?php
namespace Classes;

use Classes\Polimorfismo;

class PolimorfismoDeposito extends Polimorfismo{
    public $Desconto;
    
    public function __construct(string $Produto, float $Valor) {
        parent::__construct($Produto, $Valor);
        $this->Desconto = 15;
        $this->Metodo = 'Diposito';
    }
    
    //altera desconto
    function setDesconto(float $Desconto) {
        $this->Desconto = $Desconto;
    }

    //Aplicando Polimorfismo
    //evento overide metodo com o mesmo nome  
    //mesmo parametro e tipo de retorno
    // apenas alterando o
    // comportamento da classe Pai
    public function Pagar() {
        //atribui desconto
        $this->Valor = ($this->Valor / 100) * 100 - $this->Desconto;
        //executa o metodo pai
        parent::Pagar();        
    }

}