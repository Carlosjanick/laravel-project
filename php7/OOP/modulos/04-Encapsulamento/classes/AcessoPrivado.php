<?php
namespace Classes;

class AcessoPrivado{
    private $Nome;
    private $Email;
    private $CPF;
    
    function __construct(string $Nome, string $Email, string $CPF) {
        $this->setNome($Nome);
        $this->setEmail($Email);
        $this->setCPF($CPF);
    }

    function setNome(string $Nome) {
        if($Nome && is_string($Nome)):
            $this->Nome = $Nome;
        else:
            die('Erro no nome');
        endif;
        
    }
    
    public function setEmail(string $Email) {
        if (!filter_var($Email, FILTER_VALIDATE_EMAIL)):
            die('ERRO Email!');
        else:
            $this->Email = $Email;
        endif;
    }
    
    function setCPF(string $CPF) {
        if(preg_match('/[0-9]*/i', $CPF) && strlen($CPF) == 11):
            $this->CPF = $CPF;
        else:
            die('Erro no Cpf');
        endif;
    }




}
