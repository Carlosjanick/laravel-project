<?php
namespace Classes;

use Classes\Polimorfismo;

class PolimorfismoCartao extends Polimorfismo{
   /**Juros por cada parcela*/
   public $Juros;
   
   /**Total de juros* */
   public $Encargos;
   /**
    *Guarda quantidade pago por cada parcela
    * @var float
    */
   public $Parcela;
   public $NumParcela;
   
   public function __construct(string $Produto, float $Valor) {
       parent::__construct($Produto, $Valor);
       $this->Juros = 1.17;
       $this->Metodo = "Cartao de credito";
   }
   
     
    //usando polimorfismo com overloading
    //executa mesmo metodo com o mesmo nome parametro e retorno diferente
   public function Pagar(int $Parcelas = NULL) {//altera o metodo possibilitando a imformaçao mas é ainda o mesmo metodo da classe Pai
       $this->setNumParcela($Parcelas);
       $this->setEncargos();
       
       //acrescenta o juro
       $this->Valor = $this->Valor + $this->Encargos;
       
       //recupera quantidade pago por cada parcela
       $this->Parcela = $this->Valor / $this->NumParcela;
       
       echo "Vocé pagou {$this->Valor} por um {$this->Produto} <br>";
       echo "<small>Pagamento efectuado via {$this->Metodo} em {$this->NumParcela}x iguais de {$this->Real($this->Parcela)} </small><hr>";
   }
   
   /** Para 5,5% imforme 5.5  */
   function setJuros(float $Juros) {
       $this->Juros = $Juros;
   }

   /** recupera valor de juros a acrescentar de acordo com o numero de parcelas*/
   function setEncargos() {
       $this->Encargos = ($this->Valor * ($this->Juros/100)) * $this->NumParcela;
   }

   function setNumParcela(int $NumParcela) {
       $this->NumParcela = ((int) $NumParcela >= 1 ? $NumParcela : 1);
   }


}
