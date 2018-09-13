<?php
	$names = ['carlos', 'Natalia', 'Dulcy', 'Vanda'];
	$containsVanda = in_array('Vanda', $names);

	var_dump($containsVanda); //verdade

	$containsKaly = in_array('kaly', $names);
	var_dump($containsKaly); //false

	$wheresNat = array_search('Natalia', $names);  //informa a posição. 1..0...2 //se nao encontrar retorna false.
	var_dump($wheresNat);
	$whereVol = array_search('valentino', $names); //false
	var_dump($whereVol);

?>