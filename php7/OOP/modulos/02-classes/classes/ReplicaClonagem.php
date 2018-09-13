<?php

namespace Classes;

class ReplicaClonagem {

    var $Tabela;
    var $Termos;
    var $AddQuery;
    var $Query;

    function __construct(string $Tabela, string $Termos, string $AddQuery) {
        $this->Tabela = $Tabela;
        $this->Termos = $Termos;
        $this->AddQuery = $AddQuery;
    }

    function setTabela(string $Tabela) {
        $this->Tabela = $Tabela;
    }

    function setTermos(string $Termos) {
        $this->Termos = $Termos;
    }

    function ler() {
        $this->Query = "SELECT * FROM {$this->Tabela} WHERE {$this->Termos} {$this->AddQuery}";
        echo "{$this->Query} <hr>";
    }

}
