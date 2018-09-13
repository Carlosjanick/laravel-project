<?php

require('classes/Book.class.php');
require('classes/Costomer.class.php');

/*
  $book1 = new Book();

  $book1->isbn       = '123458ijgh';
  $book1->title      = 'php7';
  $book1->author     = 'Carlos Pina';
  $book1->available  = true;
 */
/*
  $book2 = new Book();
  $book2->isbn       = 'yhy34567234';
  $book2->title      = 'jQuery';
  $book2->author     = 'Jorge Andrade';
  $book2->available  = 12;

  //var_dump($book1, $book2);

  if($book2->getCopy()){
    echo 'Aqui, sua cópia, restando mais ' . $book2->available. ' Copias';
  }else{
    echo 'Tenho medo de que esse livro não esteja disponível';
  }

 */

$book3 = new Book(9784567, 'Java', 'Jair Pires', 4);
$book4 = new Book(9876555, 'C#', 'Reus Tavares');
var_dump($book3, $book4);


 //__toString
 $book5 = new Book(9087777, 'Kor', 'Pina pina', 0);

 /*$string = (string) $book5;
 var_dump($string);*/

 echo $book5;
?>