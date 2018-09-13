<?php
 require_once (__DIR__ . DIRECTORY_SEPARATOR . 'carregamento-auto/autoload.php');
 
 use classes\Customer;
 use classes\Book;
 
 $cliente1 = new Customer(null, 'Pina', 'Carlos', 'pina@gmail.com');
 //echo $cliente1->getFirstname();
 
 $book1  = new Book(1223456, 'PHP7',  'Carlos Pina');
 
 var_dump($cliente1, $book1);