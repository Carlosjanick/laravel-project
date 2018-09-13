<?php

namespace Classes;

class ClassesObjetos {

    var $Classe;
    var $Funcao;

    function getClass($Class, $Funcao) {
        echo "<p> A classe {$Class} serve para {$Funcao} </p>";
    }

    function verClass() {
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }

}
