<?php
namespace Classes;
use Interfaces\IAluno;

class TrabalhoComInterfaces implements IAluno{
    public $Aluno;
    public $Curso;
    public $Formacao;
    
    function __construct(string $Aluno, string $Curso) {
        $this->Aluno = $Aluno;
        $this->Curso = $Curso;
        $this->Formacao = array();
    }

    
    
    public function Matricular(string $Curso) {
        $this->Curso = $Curso;
        echo "{$this->Aluno} foi matriculado no curso {$this->Curso}<br>";
    }

    public function Formar() {
        $this->Formacao[] = $this->Curso;
        echo "{$this->Aluno} formou-se no curso {$this->Curso}<br>";
    }

}
