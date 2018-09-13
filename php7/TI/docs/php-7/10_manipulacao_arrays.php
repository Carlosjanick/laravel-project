<?php

$cart = [
    0 => 'Macarrão',
    1 => 'Feijão',
    2 => 'Arroz',
    3 => 'Batata'
];

echo '<pre>';
arsort($cart);  //ordenar em ordem decrescente(maior para menor ex: Z-A)
var_dump($cart);

echo '<hr>';

asort($cart);  //ordenar em ordem crescente (maior para menor ex: A-Z)
var_dump($cart);

echo '<hr>';

sort($cart);  //ordenar em ordem crescente (maior para menor ex: A-Z) / ordenando também as chaves
var_dump($cart);

echo '<hr>';