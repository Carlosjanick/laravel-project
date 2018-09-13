<?php

$ages = [12, 14, 18, 20, 44, 50, 98, 78, 56];

// echo $ages[count($ages) - 1];   //retorna o ultimo elemento do array - 1 pq o array comença em 0
// echo end($ages);  //retorna o ultimo elemento do array

$agesFiltered = array_filter($ages, function ($age) {  //filtrar os valores da array
    return $age >= 18;
});    //retorna somente os numeros = ou superior a 18

// var_dump($agesFiltered);

$names = ['Carlos', 'EspecializaTi', 'Company'];
/*
$names[0] = strtoupper($names[0]);  //converter em maiuscula
$names[1] = strtoupper($names[1]);
$names[2] = strtoupper($names[2]);
*/

//função a ser usada pelo array map
function applyToupper($value)
{
    return strtoupper($value);
}
//array map , pega numa array aplica a todos os elementos algo (ex: uma formatação uma limpeza etc)
$names = array_map('applyToupper', $names);



var_dump($names);


$dados = ['Maria', 'Carlos', 'Pedro', 'Joana', 'Helton'];

/**
 * funçao que recebe uma string e uma letra verifica se a letra existe na string
 *
 * @param string $texto
 * @param string $letra
 * @return boolean
 */
function instr_existe(string $texto, string $letra) {
    $result = strpos($texto, $letra);
    if ($result !== false) {
        return true;
    }else{
        return false;
    }
    
}

/**
 * array_filter , recebe uma array e filtra, passando cada dado para o
 *  callback para verificar de acordo com a condiçao imposta se retornar ou nao.
 */
$array_filtrado = array_filter($dados, function ($dado){  
    if (instr_existe($dado, 'a')){
        return $dado;
    }
});

echo '<pre>';
var_dump($array_filtrado);


echo '<hr>';
//array_map  - pega uma array e faz para todos alguma formatação alguma coisa etc de uma forma geral

$dadosF = array_map(function($dado){
    return strtoupper($dado);
}, $dados);

var_dump($dadosF);
