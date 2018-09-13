<?php
	$properties = [
		'firstname' => 'bom',
		'aurname'   => 'ciddle',
		'house'     => 'alytherin'
	];

	$properties1 = $properties2 = $properties3 = $properties;

	sort($properties1);   //orden alfabetica dos valores removendo a chave e adicionando chave numerico
	var_dump($properties1);

	rsort($properties2);   //ordena os elementos reversamente removendo a chave e adicionando chave numerico
	var_dump($properties2);

	asort($properties3); //ordena os valores em orden alfatetica mantendo as chaves
	var_dump($properties3);

	ksort($properties2);   //ordena os elementos pelas suas chave
	var_dump($properties2);
?>