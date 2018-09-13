<?php

namespace Classes;

class ModelagemDeClasse {

    public $Nome;
    public $Idade;
    public $Profisao;
    public $ContaSalario;

    function __construct(string $Nome, int $Idade, string $Profisao, float $ContaSalario) {
        $this->Nome = $Nome;
        $this->Idade = $Idade;
        $this->Profisao = $Profisao;
        $this->ContaSalario = $ContaSalario;
    }

    public function setNome($Nome) {
        $this->Nome = $Nome;
    }

    public function setIdade($Idade) {
        $this->Idade = $Idade;
    }

    public function setProfisao($Profisao) {
        $this->Profisao = $Profisao;
    }

    public function setContaSalario($ContaSalario) {
        $this->ContaSalario = $ContaSalario;
    }

    public function Trabalhar($Trabalho, $Valor) {
        $this->ContaSalario += $Valor;
        $this->DarEcho("{$this->Nome} desenvolveu um {$Trabalho} e recebeu {$this->ToReal($Valor)} ");
    }

    public function ToReal(float $Valor): float {
        return number_format($Valor, 2, '$', '.');
    }

    public function DarEcho($Mensagem) {
        echo "<p>{$Mensagem}</p>";
    }

}
