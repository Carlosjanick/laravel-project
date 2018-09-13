<?php
	function printall(array $books){
		echo '<i>' .$books['title']. '</i> - <b>' .$books['author']. '<b>';
			 if(!$books['available']):
				echo '<span>--->Não avaliado!</span>';
			 endif; 
	}
?>


<?php
	//$booksJon = file_get_contents('books.json');
	$booksJon = file_get_contents(__DIR__ . '/books.json');
	//var_dump($booksJon);
	$books = json_decode($booksJon, true);  //transforma em array (Matriz)
?>
<ul>
	<?php foreach($books as $book): ?>
		<li>
			<?php printall($book); ?>
		</li>
     <?php  endforeach; ?>
</ul>


//__DIR__ //CONTEN O CAMINHO DO CORRENTE DIRETOTIO DO FICHEIRO.