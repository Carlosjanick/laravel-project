<?php

namespace Classes;

class AtributosMetodos {

    var $Nome;
    var $Idade;
    var $Profissao;

    function setUsuario(string $Nome, int $Idade, string $Profissao) {
        $this->Nome = $Nome;
        $this->setIdade($Idade);
        $this->Profissao = $Profissao;
    }

    function getUsuario(): string {
        return "{$this->Nome} tem {$this->Idade} anos de Idade. E trabalha como {$this->Profissao}.";
    }

    function getClasse() {
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }

    function setIdade($Idade) {
        if (!is_int($Idade)) {
            die('Idade informada é incorreta!');
        } else {
            $this->Idade = $Idade;
        }
    }

    function Envelhecer() {
        $this->Idade += 1;
    }

}
