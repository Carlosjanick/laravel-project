<?php  
	//verifica se é um directorio
	var_dump(is_dir('books.json'));
	var_dump(is_dir('teste'));

	//mkdir('teste1', 0700); //cria directorio
	if(!is_dir('teste')){
		mkdir('teste', 0700); //cria directorio
	}

	//rmdir('teste'); //deleta diretorio
	

	//deletear arquivi.
	$fh = fopen('teste/teste.html', 'a');  //abri o arquivo se nao existir ele cria
	fwrite($fh, '<h1>Olá Mundo</h1>');  //escreve no arquivo  se estiver algo escreve no fim.

	fclose($fh); //fecha o arquivo.

	//unlink('teste/teste.html'); //apaga o ficheiro da pasta
	//rmdir('teste'); //deleta o diretorio
	

?>



