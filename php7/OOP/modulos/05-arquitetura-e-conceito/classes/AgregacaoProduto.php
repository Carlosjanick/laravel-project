<?php
namespace Classes;

class AgregacaoProduto {
    private $Produto;
    private $Nome;
    private $Valor;
    
    function __construct(string $Produto, string $Nome, float $Valor) {
        $this->Produto = $Produto;
        $this->Nome = $Nome;
        $this->Valor = $Valor;
    }
    
    function getProduto() : string {
        return $this->Produto;
    }

    function getNome() : string {
        return $this->Nome;
    }

    function getValor() : float {
        return $this->Valor;
    }


    

}
