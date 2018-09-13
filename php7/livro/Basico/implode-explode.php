<?php

	//explode(separator,string,limit)  //limit opcional
	echo '<pre>';

	$str = "Hello world. It´s a beautiful day.";
	print_r(explode(" ", $str));        //transforma uma string em uma array.


	$str = 'one,two,three,four';

	//zero limit
	print_r(explode(',', $str, 0));   //limit expecifica numero de chave

	//positive limit
	print_r(explode(',', $str, 2));

	//negative limit
	print_r(explode(',', $str, -1));  //retira o ultimo.

	echo '</pre>';

	//implode(separator,array)
	//Transformar array em strings.
	//$arr = array('Hello', 'World!', 'Beautiful', 'Day!');
	$arr = [
		'Hello', 
		'World!',
		'Beautiful',
		'Day!'
	];

	echo implode(" ", $arr) ."<br>";
	echo implode('+', $arr) ."<br>";
	echo implode('-', $arr) ."<br>";
	echo implode('x', $arr) ."<br>";
?>