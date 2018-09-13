<?php
	$text = ' Como pode um clam em um cremelimpo ?  ';
	echo strlen($text) ."<br>";  //tamanho da string.

	$text = trim($text); //remove espaços em brancos inicio e fim.
	echo strlen($text) ."<br>";

	echo strtoupper($text) ."<br>"; //text em maiuscula.

	echo strtolower($text) ."<br>"; //text em minuscula.

	$text = str_replace('Como', 'quando', $text);
	echo $text . "<br>";

	echo substr($text, 2, 6) . "<br>"; //apartir de  2º posicao pega 6

	var_dump(strpos($text, 'Como')); //posicao onde encontra
	var_dump(strpos($text, 'pode')); // onde comença a posiçao contando as letras.

	$first_name = 'Carlos';
	$last_name = '\'Pina\'';

	echo 'My name is '. $first_name . ' ' . $last_name;
?>