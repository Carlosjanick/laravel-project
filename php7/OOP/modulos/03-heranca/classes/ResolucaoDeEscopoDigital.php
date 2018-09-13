<?php
namespace Classes;
use Classes\ResolucaoDeEscopo;

class ResolucaoDeEscopoDigital extends ResolucaoDeEscopo{
    public static $Digital;
    
    function __construct(string $Produto, float $Valor) {
        parent::__construct($Produto, $Valor);
    }
    
     public function Vender() {
        self::$Digital += 1;
        parent::Vender();
    }
}
