<?php

namespace Classes;

class Heranca {

    public $Nome;
    public $Idade;
    public $Formacao;

    public function __construct(string $Nome, int $Idade) {
        $this->Nome = $Nome;
        $this->Idade = $Idade;
        $this->Formacao = array();
    }

    public function envelhecer() {
        $this->Idade += 1;
    }

    public function formar(string $Cursos) {
        $this->Formacao[] = (string) $Cursos;
    }

    public function verPessoa() {
        $Formacao = implode(', ', $this->Formacao);
        echo "{$this->Nome} tem {$this->Idade} anos de idade e é formado em: {$Formacao}";
    }

}
