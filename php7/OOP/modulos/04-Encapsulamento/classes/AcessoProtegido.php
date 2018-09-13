<?php
namespace Classes;

class AcessoProtegido{
    public $Nome;
    protected $Email; //nao pode ser acessado por objetos
    
    function __construct(string $Nome, string $Email) {
        $this->Nome = $Nome;
        $this->setEmail($Email);
    }
    

    public function setEmail(string $Email) {
        if (!filter_var($Email, FILTER_VALIDATE_EMAIL)):
            die('Email Invalido!');
        else:
            $this->Email = $Email;
        endif;
    }
    
     /*quando quer que uma classe filha erde um metodo mas nao modificar ele porque na classe pai ja tem a responsabilidade clara
         *  usa se final---afrente*/
    final protected function setNome(string $Nome){
        $this->Nome = $Nome;
    }
}

/* classe */
class AcessoProtegidoFilha extends AcessoProtegido{
    protected $CPF;
    
    public function AddCpf(string $Nome, string $Cpf){
        parent::setNome($Nome);//usa mas nao pode modificar o metodo setNome por ser final
        $this->CPF = $Cpf;
    }
}
