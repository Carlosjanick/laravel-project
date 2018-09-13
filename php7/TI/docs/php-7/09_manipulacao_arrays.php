<?php

$cart = ['Arroz', 'Sabão', 'Feijão', 'Balinhas'];
var_dump($cart);

echo '<hr>';

array_pop($cart);  //remove o ultimo elemento do array
var_dump($cart);

echo '<hr>';

array_shift($cart); //remove o 1º elemento do array
var_dump($cart);

echo '<hr>';

unset($cart[0]);   //remove do array o elemento indicado
var_dump($cart);

echo '<hr>';

array_push($cart, 'Tapete');  //adiciona elemento no final da array
array_push($cart, 'Rodo');
var_dump($cart);

echo '<hr>';

array_unshift($cart, 'Microondas'); //adiciona elemento no inicio da array
array_unshift($cart, 'Tapete');
var_dump($cart);

echo '<hr>';

$cart = array_unique($cart); //remove elementos duplicados do array 
var_dump($cart);