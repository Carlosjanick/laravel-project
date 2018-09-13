<?php
namespace Classes;

class AgregacaoCarrinho{
    private $cliente;
    private $Produtos;
    private $Total;
    
    
    function __construct(AssociacaoCliente $cliente) {
        $this->cliente = $cliente;
        $this->Produtos = array();
    }
    
    public function Add(AgregacaoProduto $Produto){
        $this->Produtos[$Produto->getProduto()] = $Produto; //[] indice pega o id do produto passa como indice
        
        //SOMA VALORES
        $this->Total += $Produto->getValor();
        $this->VerCarrinho($Produto, 'Adicionou');
        
    }
    
    
    public function Remove(AgregacaoProduto $Produto) {
        unset($this->Produtos[$Produto->getProduto()]);//remove pelo indice
        $this->Total -= $Produto->getValor();
        $this->VerCarrinho($Produto, 'Removeu');
    }




    public function VerCarrinho (AgregacaoProduto $Produto, string $Action){
        echo "Voce {$Action} um {$Produto->getNome()} no seu carinho. valor {$Produto->getValor()} $00 <hr>";
    }

}
