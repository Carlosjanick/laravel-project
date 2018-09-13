<?php
namespace Classes;

class AcessoPublico {
   public $Nome;
   public $Email;
   
   function __construct(string $Nome, string $Email) {
       $this->Nome = $Nome;
       $this->setEmail($Email);
   }

   public function setEmail(string $Email) {
       if(!filter_var($Email, FILTER_VALIDATE_EMAIL)):
           die('Email Invalido!');
       else:
            $this->Email = $Email;
       endif;
   }
}
