<?php

 require_once(__DIR__ . '/classes/Book.class.php');
 require_once(__DIR__ . '/classes/Customer.class.php');

 
  $costomer1 = new Customer(1, 'Pina', 'Carlos', 'cp121219@gmail.com');
  $costomer2 = new Customer(2, 'Joao', 'Tavares', 'joao@gmail.com');

  $book1     = new Book(9876565,'jQuery', 'Carlos Pina', 1);
  $book2     = new Book(9087654,'Java', 'João Pires', 2);

  var_dump($costomer1, $costomer2, $book1, $book2);


  //
  $costomer1->id = 2;  //error atributo privado na classe nao é acessivel.

?>