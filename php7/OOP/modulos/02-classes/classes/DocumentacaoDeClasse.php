<?php

/**
 * DocumentacaoDeClasse.class.php 
 * Essa classe foi criada para mostrar a interação de objeto. Logo depois replicamos ela para ver
 * a documentaçao de classe com PHPDoc.
 * @copyright (c) 2017, Carlos .J Pina
 * @author Carlos Pina <carlospinadjarfogo@gmail.com>
 */

namespace Classes;

class DocumentacaoDeClasse {

    /**  @var string Nome da Empresa  */
    public $Empresa;

    /**
     * Esse atributo é auto gerida pela classe e incrementa o numero de funcionario!
     * @var int Número de Funcionarios 
     */
    public $Sectores;

    /**  @var InteracaoClasse   objeto vindo da classe InteracaoClasse   */
    public $Funcionario;

    public function __construct($Empresa) {
        $this->Empresa = $Empresa;
        $this->Sectores = 0;
    }

    /**
     * <b>Contratar Funcionario</bInforme um objeto da classe InteracaoClasse, o cargo e o salário do
     * Funcionario a ser contratado.
     * @param object $Funcionario  = objeto da classe InteracaoClasse
     * @param string  $Cargo = Profisao a ocupar
     * @param float $Salario = Salario do Funcionario
     */
    public function Contratar($Funcionario, $Cargo, $Salario) {
        $this->Funcionario = (object) $Funcionario;
        $this->Funcionario->Trabalhar($this->Empresa, $Salario, $Cargo);
        $this->Sectores += 1;
    }

    /**
     * <b>Pagar e obter o salário</b> ao executar esse metodo o salário do funcionario será pago. 
     * voce ainda podera dar echo neste mesmo para visualizar o salário!  
     * @return float Retorna o salário do contratado!
     */
    public function Pagar() {
        $this->Funcionario->Receber($this->Funcionario->Salario);
        return $this->Funcionario->Salario;
    }

    /**
     * <b>Promover o Funcionario</b> ao executar esse metodo requisita o Cargo e o salario para 
     * pronmover o Funcionario.
     * @param string $Cargo = Cargo a promover o Funcionario
     * @param float $Salario =  Salario depois de promover, tendo possibilidade de informar ou não.
     */
    public function Promover($Cargo, $Salario = null) {
        $this->Funcionario->Profisao = $Cargo;
        if ($Salario) {
            $this->Funcionario->Salario = $Salario;
        }
    }

    /**
     * <b>Demitir o Funcionario</b> ao executar esse metodo demiti o funcionario informando a recisao, 
     * e executando o metodo receber para poder incrementar a conta do funcionario, e depois de ser demitido o funcionario 
     * nao vai mais ter um salario nem uma empresa setados como null.
     * @param float $Recisao = Recisao salario da recisao pago ao funcionario
     */
    public function Demitir($Recisao) {
        $this->Funcionario->Receber($Recisao);
        $this->Funcionario->Empresa = null;
        $this->Funcionario->Salario = null;

        $this->Sectores -= 1;
    }

    /**
     * 
     * @param object $Funcionario = informar qual funcionario vai ser manipulado pela Classe.
     */
    public function Funcionario($Funcionario) {
        $this->Funcionario = (object) $Funcionario;
    }

}
