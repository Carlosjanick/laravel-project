<?php
namespace Classes;

class AssociacaoLogin {
    /** @var AssociacaoCliente */
    private $Cliente; /*atributo para associar ao cliente*/
    /**
     *responsavel por verificar o login true ou falso
     * @var bolean 
     */
    private $Login; 
    
    function __construct(object $Cliente) {
        if(is_object($Cliente)):
            $this->Cliente = $Cliente;
            $this->Login = true;
        else:
            die('Erro ao fazer login!');
        endif;
    }
    
    
    function getCliente() : object {
        return $this->Cliente;
    }

    function getLogin() : string {
        return $this->Login;
    }



}
