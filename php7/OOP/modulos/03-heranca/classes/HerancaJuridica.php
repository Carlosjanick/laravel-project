<?php

namespace Classes;

use Classes\Heranca;

class HerancaJuridica extends Heranca {

    public $empresa;
    public $Funcionarios;

    public function __construct(string $nome, int $idade, string $empresa) {
        parent::__construct($nome, $idade);
        $this->empresa = $empresa;
    }
    
    public function Contratar(string $pessoa) {
        echo "<br> A empresa {$this->empresa} de {$this->Nome} contratou {$pessoa} <hr>";
        $this->Funcionarios += 1;
    }
    
    public function verEmpresa() {
        echo "{$this->empresa} foi fundada por {$this->Nome} e tem {$this->Funcionarios} funcionarios <br><small style='color: #09f;'>";
        parent::verPessoa();
        echo '</small></br>';
    }
}
