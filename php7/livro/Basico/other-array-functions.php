<?php
	$properties = [
		'firstname'   =>   'Tom',
		'surname'     =>   'Riddle',
		'house'       =>   'Slytherin'
	];


	$keys = array_keys($properties);
	var_dump($keys);

	$values = array_values($properties);
	var_dump($values);


	$names = ['Harry', 'Ron', 'Hermione'];
	$size = count($names);
	var_dump($size); //3

	//unir arrays array1 + array2 ....
	$good =  ['Harry', 'Ron', 'Hermione'];
	$bad  =  ['Dudley', 'Vernon', 'Petunia'];

	$all  =  array_merge($good, $bad);
	var_dump($all); 
?>