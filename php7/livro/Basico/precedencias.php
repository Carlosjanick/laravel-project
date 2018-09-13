<?php
	$a = 1;
	$b = 3;
	$c = true;
	$d = false;

	$e = $a + $b > 5 || $c; //true
	var_dump($e);

	$f = $e == true && !$d; //true   
	var_dump($f);

	$g = ($a + $b) * 2 + 3 * 4; //20
	var_dump($g);

?>