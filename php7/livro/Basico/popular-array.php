<?php
	$names = ['Harry', 'Ron', 'Hermione'];
	$status = [
		'nome'   => 'James Potter',
		'status' => 'dead'
	];

	$names[] = 'Neville'; //add elemente no final.
	$status['age'] = 32;  //adiciona ao array a chave age com valor 32

	var_dump($names, $status);

	unset($status['status']); //remove do array
	var_dump($status);

	echo '<hr>Acessando elementos:<hr>';
	var_dump($names[0]);

	//var_dump($names[10]); //nao existindo o elemento na posiçao  null



	$pc = [
		'asus' => [
			'modelo'      => '56yu',
			'ano_fabrico' => '11/10/2000'
		],
		'hp'   => [
			'modelo'      => '9iuj',
			'ano_fabrico' => '09/08/1997'
		]
	];


	var_dump($pc['asus']['modelo']);
	    
?>