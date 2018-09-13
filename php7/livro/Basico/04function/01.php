<?php
	function soma($a , $b){
		$soma = $a + $b;
		return $soma;
	}



	$r = soma(4, 3);

	echo $r;

	echo "<hr>";


	function addNumbers($a, $b, $showMessage = false){
		$soma = $a + $b;
		if($showMessage){
			echo 'O Resultado da soma entre '. $a . ' e ' . $b .' é ' . $soma;
			echo "<hr>";
		}else{
			echo $soma ."<hr>";
		}
	}


	addNumbers(3, 7);
	addNumbers(3, 7, false);
	addNumbers(10, 20, true);


	function modify($a){
		$a = 3;
	}

	$a = 2;

	modify($a);

	var_dump($a);


	echo "<hr>";

	//especificando o tipo das variaveis de entrada e  de retorno da função:
	function somarNumer(int $a, int $b, bool $showMessage) : int {
		$soma = $a + $b;
		if($showMessage){
			echo 'O Resultado da soma entre '. $a . ' e ' . $b .' é ' . $soma;
			echo "<hr>";
		}

		return $soma;
	}

	somarNumer(3, 7, true);
	somarNumer(3, 7, false);
	somarNumer(10, 20, true);
	
?>