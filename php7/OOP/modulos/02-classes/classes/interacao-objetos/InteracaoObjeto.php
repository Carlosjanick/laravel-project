<?php

namespace Classes\IC;

class InteracaoObjeto {

    //empresa
    public $Empresa;
    public $Sectores;
    //dizer que o atributo pertence a Classe InteraçaoClasse
    /** @var InteracaoClasse   */
    public $Funcionario;

    public function __construct($Empresa) {
        $this->Empresa = $Empresa;
        $this->Sectores = 0;
    }

    public function Contratar($Funcionario, $Cargo, $Salario) {
        $this->Funcionario = (object) $Funcionario;
        $this->Funcionario->Trabalhar($this->Empresa, $Salario, $Cargo);
        $this->Sectores += 1;
    }

    public function Pagar() {
        $this->Funcionario->Receber($this->Funcionario->Salario);
    }

    public function Promover($Cargo, $Salario = null) {
        $this->Funcionario->Profisao = $Cargo;
        if ($Salario) {
            $this->Funcionario->Salario = $Salario;
        }
    }

    public function Demitir($Recisao) {
        $this->Funcionario->Receber($Recisao);
        $this->Funcionario->Empresa = null;
        $this->Funcionario->Salario = null;

        $this->Sectores -= 1;
    }

    //informar qual funcionario vai ser manipulado
    public function Funcionario($Funcionario) {
        $this->Funcionario = (object) $Funcionario;
    }

}
