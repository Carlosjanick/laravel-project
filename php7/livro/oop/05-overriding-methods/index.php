<?php
 require_once (__DIR__ . DIRECTORY_SEPARATOR . 'carregamento-auto/autoload.php');
 
 use classes\Pops;
 use classes\Child;
 
// $pops = new Pops();
 $child = new Child();
 
 //echo $pops->sayHi(); // Hi, I am pops.
 echo $child->sayHi(); //Hi, I am Child.
 
