<?php
	/*echo 'Antes do condicional <br>';

	if(4 > 3){
		echo 'dentro do condicional !<br>';
	}


	if( 3 > 4){
		echo 'isso nao sera executado <br>';
	}

	if( 2 > 3 ){
		echo "Dentro do condicional <br>";
	}else{
		echo "Dentro do outro <br>";
	}
	*/

	if( 4 > 5 ){
		echo "Nao impresso <br>";
	}elseif( 4 > 4 ){
		echo "Não impresso <br>";
	}elseif( 4 == 4 ){
		echo "Impresso <br>";
	}elseif( 4 > 2 ){
		echo 'Não avaliado <br>';
	}else{
		echo "Não avaliado <br>";
	}

	if( 4 == 4){
		echo "Printed";
	}
?>