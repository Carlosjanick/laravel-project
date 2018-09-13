<?php

namespace Classes\IC;

class InteracaoClasse {

    //funcionario
    public $Nome;
    public $Idade;
    public $Profisao;
    public $Conta;
    public $Empresa;
    public $Salario;

    public function __construct($Nome, $Idade, $Profisao, $Conta) {
        $this->Nome = $Nome;
        $this->Idade = $Idade;
        $this->Profisao = $Profisao;
        $this->Conta = $Conta;
    }

    public function Trabalhar($Empresa, $Salario, $Profisao) {
        $this->Empresa = $Empresa;
        $this->Salario = $Salario;
        $this->Profisao = $Profisao;
    }

    public function Receber($Valor) {
        $this->Conta += $Valor;
    }

}
