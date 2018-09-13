<?php
namespace Classes;

class ResolucaoDeEscopo{
    public $Produto;
    public $Valor;
    
    public static $Venda; //nao vai poder ser acessado pelo objecto
    public static $Lucros; //sao atributos da classe
    
    //construct é desparado pelo objecto por isso nao vai poder acessar atributos estaticos
    
    function __construct(string $Produto, float $Valor) {
        $this->Produto = $Produto;
        $this->Valor = $Valor;
    }
    
    public function Vender() {//metodo do objeto
       //para acessar produtos estaticos usa a palavra reservada self
       self::$Vendas += 1;
       self::$Lucros = $this->Valor * self::$Vendas;
       echo "{$this->Produto} vendido por {$this->Valor}$00 <br>";
    }

     //metodo da classe so pode utilizar atributos da classe dentro dele //nao pode utilizar  $this somente o self ou parent
    public static function Relatorio(){
        echo "<hr>";
        echo "Este produto vendeu ". self::$Vendas." unidade(s). Total " .self::$Lucros ."$00";
        echo "<hr>";
    }
    
    
    
}
