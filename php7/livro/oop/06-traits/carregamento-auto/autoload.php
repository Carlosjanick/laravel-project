<?php
//usando o spl_autoload_register

function autoloader($classname){
    $classname1 = str_replace('\\', '/', $classname);
    $classname2 = __DIR__ .DIRECTORY_SEPARATOR. $classname1;
    $classname3 = str_replace('carregamento-auto/', '', $classname2) . '.class.php';
   
    if(!file_exists($classname3)){
        throw new Exception("File path {$classname3} not found");
    }else{
        require_once ($classname3);
    }
}

spl_autoload_register('autoloader');