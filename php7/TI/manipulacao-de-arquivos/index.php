<?php 
	echo 'Trabalhando com arquivos em PHP <hr><br>';

	//touch('texto.txt');  //cria o arquivo 
	touch('arquivos/texto.php');

	//Verificar se um Arquivo existe
	//$result = (file_exists('arquivos/texto.txt')) ? 'Existe' : 'Não Existe';

	//echo $result;

	//Renomear um Arquivo com PHP
	//rename('arquivos/texto.txt', 'arquivos/textoss.php');

	//Copiar Arquivos com PHP
	//copy('texto.txt', 'arquivos/texto2.txt');

	//Deletar Arquivos com PHP
	//unlink('texto.txt');

	/*
	if(file_exists('arquivos/texto.txt') ){
		if(unlink('arquivos/texto.txt')){
				echo 'deletado...';
		}else{
			   echo 'nao deletado...';
		}
	}
	*/

	//escrever conteúdos em arquivos
	file_put_contents('arquivos/texto.php', '<?php echo "Olá Carlos estou ecrevendo em arquivo kkkkkk"; ?>');

	//Ler o conteúdo de um arquivo com PHP
	$dados = file_get_contents('arquivos/texto.php');
	var_dump($dados);

	//Escrever logs em arquivos com PHP
	echo '<hr>';

	//EXEMPLO REAL 
	

	/*****
		A função fopen() abre um arquivo, para que alguma coisa seja feito com ele, seja escrever ou ler
		A função fclose() apenas fecha o arquivo aberto, ela é muito importante para liberar recursos da memória, ou seja, deixar a aplicação menos pesada.
		A função fwrite() serve para escrever em um arquivo aberto.
	*/

	//// Abre o arquivo especializati.log, caso não exista o arquivo ele será criado, por causa da opção "a+"
	//$file = fopen('especializati.log', 'a+');
	//Escreve no arquivo com a data atual
	//$text = 'test log '. date('y-m-d H:i:s');

	//fwrite($file, $text);

	// Fecha o arquivo aberto
	//fclose($file);


	//O segundo parâmetro da função fopen(prm1, prm2) é muito importante, pois neste segundo parâmetro é definido o modo como o arquivo será aberto, existem diversas opções disponíveis. A opção “a+” abre o arquivo para leitura e escrita, coloca o ponteiro no final do arquivo, e caso o arquivo ainda não exista o cria.
	
	function registerLog(string $nameFileLog, string $log) {
		$text = $log. date('y-m-d H:i:s') . "\n";

		$file = fopen($nameFileLog, 'a+');
		fwrite($file, $text);

		fclose($file);
	}

	//registerLog('especializati.log', 'teste');
	//registerLog('especializati.log', 'Carlos;carlospinadjarfogo@gmail.com;');


	//A função fgets() lê uma certa quantidade de caracteres de um arquivo.
	//$file = fopen('especializati.log', 'a+');
	//echo fgets($file, 4096);  //retorna uma linha
	//fclose($file);


	//Neste exemplo, se o arquivo especializati.log conter 100 linhas o loop while vai percorrer 100 vezes.
    //Agora que conhecemos a função fgets() e a função feof() podemos combina-las para percorrer todas as linhas do arquivo exibir o resultado linha por linha, veja o exemplo:
    /*function lerArquivo(string $nameFileLog) {
    	$file = fopen($nameFileLog, 'a+');
	    while (!feof($file)) {  //enquanto nao chegar ao fim percorre
	    	 // Pega o resultado da linha atual
	        echo fgets($file, 4096) . '<br>';
	    }
	    fclose($file);
    }
    
    lerArquivo('especializati.log');
    */
   
   	function lerArquivo(string $nameFileLog) {
    	$file = fopen($nameFileLog, 'a+');
	    while (!feof($file)) {  //enquanto nao chegar ao fim percorre
	    	 // Pega o resultado da linha atual
	        $dadosLinha =  fgets($file, 4096);

	        $result = explode(';', $dadosLinha);


	        $nome  = (isset($result[0])) ? $result[0] : null;
	        $email = (isset($result[1])) ? $result[1] : null;
	        $dataT = (isset($result[2])) ? $result[2] : null;

	        //echo '<pre>';
	        //print_r($result);

	        $dataQ = explode(' ', $dataT);
	        $dataD = (isset($dataQ[0])) ? $dataQ[0] : null;
	        $dataH = (isset($dataQ[1])) ? $dataQ[1] : null;

	        //echo '<pre>';
	        //print_r($dataQ);
	        if($nome != null) {
	        	echo "o email  {$email}  pertence a  {$nome}  e foi criado no dia {$dataD} ás {$dataH} <br><br>";
	        }

	    }
	    fclose($file);
    }
    
    lerArquivo('especializati.log');
 ?>