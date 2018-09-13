<?php
require ('./carregamento-auto/autoload.php');

use classes\Basic;
use classes\Premium;
use classes\Book;


function checkIfValid(Basic $custumer, array $books) : bool {
    return $custumer->getAmountToBorrow() >= count($books);
}



$costomer1 = new Basic(5, 'John', 'Doe', 'jonh@gmail.com');
$book1 = new Book(34567890, 'Php7', 'Jon Lester');
var_dump(checkIfValid($costomer1, [$book1]));
$costomer2 = new Basic(7, 'James', 'Bond', 'james@bond.com');
var_dump(checkIfValid($costomer2, [$book1]));