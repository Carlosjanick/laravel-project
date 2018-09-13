<?php
namespace Classes;

class ComposicaoUsuario{
    private $Nome;
    private $Email;
    //composicaoEndereco
    private $Endereco;
    
    function __construct($Nome, $Email) {
        $this->Nome = $Nome;
        $this->Email = $Email;
    }
    
      /*mesmos atributos que a classe que vai compor exigi */
    /*cria objecto dentro da classe*/
    public function RegistraEndereco($Cidade, $Estado){
        $this->Endereco = new ComposicaoEndereco($Cidade, $Estado);
    }
    
    function getNome() {
        return $this->Nome;
    }

    function getEmail() {
        return $this->Email;
    }

    /*metodo recursivo*/
    /** @return ComposicaoEndereco */
    function getEndereco() {
        return $this->Endereco;
    }



}
