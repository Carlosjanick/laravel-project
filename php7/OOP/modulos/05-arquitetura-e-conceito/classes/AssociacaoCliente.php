<?php
namespace Classes;

class AssociacaoCliente{
    private $Cliente;
    private $Nome;
    private $Email;
    
    
    function __construct(string $Nome, string $Email) {
        $this->Cliente = md5($Nome);
        $this->Nome = $Nome;
        $this->Email = $Email;
    }
    
    function getCliente() : string {
        return $this->Cliente;
    }

    function getNome() : string {
        return $this->Nome;
    }

    function getEmail() : string {
        return $this->Email;
    }



    
}
