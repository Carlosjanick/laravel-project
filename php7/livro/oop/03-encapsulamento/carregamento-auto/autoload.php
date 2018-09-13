<?php

/*function __autoload($class){
    $class = WW_ROOT. DS .str_replace('\\', DS, $class) . '.class.php';  //tudo que for \\ ou \ muda para /
    
    if(!file_exists($class)){
        throw new Exception("File path '{$class}' not found.");
    }
    require_once ($class);
}*/

/*function  __autoload($classname){
    $classname = str_replace('\\', '/', $classname);
    $classname = __DIR__ .DIRECTORY_SEPARATOR. $classname;
    $classname = str_replace('carregamento-auto/', '', $classname) . '.class.php';
   
    if(!file_exists($classname)){
        throw new Exception("File path {$classname} not found");
    }else{
        require_once ($classname);
    }
}*/

//usando o spl_autoload_register

function autoloader($classname){
    $classname = str_replace('\\', '/', $classname);
    $classname = __DIR__ .DIRECTORY_SEPARATOR. $classname;
    $classname = str_replace('carregamento-auto/', '', $classname) . '.class.php';
   
    if(!file_exists($classname)){
        throw new Exception("File path {$classname} not found");
    }else{
        require_once ($classname);
    }
}


spl_autoload_register('autoloader');