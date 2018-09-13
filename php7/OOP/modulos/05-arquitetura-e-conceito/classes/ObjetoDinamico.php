<?php
namespace Classes;

class ObjetoDinamico {
   public $Nome;
   private $Email;
   
   public function Novo(Object $Cliente){
       if(is_object($Cliente)):
           $this->Nome = $Cliente->Nome;
           $this->Email = $Cliente->Email;
       else:
           die('Erro: Informe um objecto com nome e email');
       endif;
   }
}
