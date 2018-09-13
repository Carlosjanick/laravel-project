<?php

namespace Classes;

class ComportamentoInicial {

    var $Nome;
    var $Idade;
    var $Profissao;
    var $Salarrio;

    function __construct(string $Nome, int $Idade, string $Profissao, float $Salario) {
        $this->Nome = (string) $Nome;
        $this->Idade = (int) $Idade;
        $this->Profissao = (string) $Profissao;
        $this->Salarrio = (float) $Salario;
        
        echo "{$this->Nome}  O objeto foi iniciado <br>";
    }

    function ver() {
        echo '<pre>';
        print_r($this);
        echo '</pre>';
    }
    
    function __destruct() {
        echo " O objeto foi distruido {$this->Nome} <br>";
    }

}
