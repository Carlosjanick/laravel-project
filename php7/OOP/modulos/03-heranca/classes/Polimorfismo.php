<?php
namespace Classes;

class Polimorfismo {
    public $Produto;
    public $Valor;
    public $Metodo;
    
    function __construct(string $Produto, float $Valor) {
        $this->Produto = $Produto;
        $this->Valor = $Valor;
        $this->Metodo = "Boleto";
    }
    
    public function Pagar() {
        echo "Voce Pagou {$this->Real($this->Valor)} por um {$this->Produto} <br/>";
        echo "<small>Pagamento efectuado via {$this->Metodo}</small><br>";
    }
    
    //converter
    public function Real(float $Valor) {
        return number_format($Valor,'2','.',','."$00");
    }
}