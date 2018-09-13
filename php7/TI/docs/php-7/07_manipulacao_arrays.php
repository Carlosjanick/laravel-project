<?php

// $nomes = array('Carlos', 'EspecializaTi', 'Company');
// $nomes = ['Carlos', 'EspecializaTi', 'Company'];
$name = 'Carlos';
$company = 'EspecializaTi';
$year = 2018;

/**
$infoCompany = [
    $name,
    $company,
    $year
];
*/

$infoCompany = compact('name', 'company', 'year');   //criar array apartir de variaveis existentes
// var_dump($infoCompany);

// var_dump(is_array($infoCompany));  //verifica se o valor é um array

// var_dump(in_array('Carlos', $infoCompany));   // verifica se existe o elemento no array
