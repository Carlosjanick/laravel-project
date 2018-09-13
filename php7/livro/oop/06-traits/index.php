<?php
require ('./carregamento-auto/autoload.php');
use classes\Basic;
use classes\Premium;

$basic1 = new Basic(1, 'Carlos', 'Pina', 'cp121219@gmail.com');
$basic2 = new Basic('', 'Joao', 'Pires', 'pires@gmail.com');
$premium1 = new Premium(null, 'Ana', 'Teixeira', 'anateixera@gmail.com');
var_dump($basic1, $basic2, $premium1);

var_dump($basic1->getId(), $basic2->getId(), $premium1->getId());


echo  Premium::getLastId();



