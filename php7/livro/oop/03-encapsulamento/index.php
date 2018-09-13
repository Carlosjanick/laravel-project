<?php

 //require_once(__DIR__ . '/classes/Book.class.php');
 //require_once(__DIR__ . '/classes/Customer.class.php');

define("WW_ROOT", dirname(__FILE__)); //base
define('DS', DIRECTORY_SEPARATOR);  //BARRA
 require_once (WW_ROOT . DS . 'carregamento-auto/autoload.php');
  
  use classes\Customer;
  use classes\Book;

  $costomer1 = new Customer(1, 'Pina', 'Carlos', 'cp121219@gmail.com');
  $costomer2 = new Customer(null, 'Pedro', 'Rodrigues', 'pedro@gmail.com');
  $costomer3 = new Customer(7, 'Joao', 'Tavares', 'joao@gmail.com');
  $costomer4 = new Customer(null, 'Teste', 'Teste', 'Teste@gmail.com');

  $book1     = new Book(9876565,'jQuery', 'Carlos Pina', 1);
  $book2     = new Book(9087654,'Java', 'João Pires', 2);

  
  //$lastID = $costomer3->getLastId();
  $lastID = Customer::getLastId();
  echo "o ultimo id foi {$lastID}";
  
  //ou
  

  
  var_dump($costomer1, $costomer2,$costomer3, $costomer4, $book1, $book2);


