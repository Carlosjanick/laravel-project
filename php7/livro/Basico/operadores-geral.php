<?php
	echo '<hr>';
 		echo '<h6>Operadores aritmeticos </h6>';
 	echo '<hr>';

 	$a = 10;
 	$b = 3;

 	var_dump($a + $b); //13
 	var_dump($a - $b); //7
 	var_dump($a * $b); //30
 	var_dump($a / $b); //3.3333...
 	var_dump($a % $b); //1
 	var_dump($a ** $b);//1000
 	var_dump(-$a); //-10

 	echo '<hr>';

 	$a = 3 + 4 + 5 - 2;
 	var_dump($a); //10

 	echo '<hr>';
 		echo '<h6>Operadores de atribuição</h6>';
 	echo '<hr>';

 	$a = 13;
 	$a += 14; //mesmo que $a = $a + 14;
 	var_dump($a);
 	$a -= 2; // mesmo que $a = $a - 2;
 	var_dump($a);
 	$a *= 4; //o mesmo que $a = $a * 4;
 	var_dump($a);

 	echo '<hr>';
 		echo '<h6>Operadores de comparação</h6>';
 	echo '<hr>';
 	var_dump(2 < 3); //true
 	var_dump(3 < 3); //false
 	var_dump(3 <= 3); //true
 	var_dump(4 <= 3); //false
 	var_dump(3 >= 3); //true
 	var_dump(3 > 3); //false

 	echo '<hr>';
 		echo '<h6>Operadores de comparação outros</h6>';
 	echo '<hr>';
 	$a = 3;
	$b = '3';
	$c = 5;
	var_dump($a == $b); // true
	var_dump($a === $b); // false
	var_dump($a != $b); // false
	var_dump($a !== $b); // true
	var_dump($a == $c); // false
	var_dump($a <> $c); // true

 	echo '<hr>';
 		echo '<h6>Operadores logicos.</h6>';
 	echo '<hr>';

 	var_dump(true && true); // true
	var_dump(true && false); // false
	var_dump(true || false); // true
	var_dump(false || false); // false
	var_dump(!false); // true

	echo '<hr>';
 		echo '<h6>Incremento de Decremento.</h6>';
 	echo '<hr>';

 	$a = 3;
 	$b = $a++; //$b is 3. $a is 4
 	var_dump($a, $b);

 	$b = ++$a; //$a and $b is 5

 	var_dump($a, $b);

?>