<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BookStore</title>
</head>
<body>
	<?php
	require('functions.php');

	/*$names = ["hARRY", 'Ron', 'Hermione'];

	foreach ($names as $key => $value) {
		echo $key ." => ". $value ."<br>";
	}*/

	echo "<hr>";

	
	$bookJson = file_get_contents(__DIR__ .'/books.json');
	$books = json_decode($bookJson, true);

	?>

	<?php 
		if(isset($_GET['title'])){
			if(bookingBook($books, $_GET['title'])){
				echo 'Booked!';  //actualiza a array
				updateBooks($books);
			}else{
				echo 'The book is not available...';
			}
		}else{
			echo '<p>You are not looking for a book?</p>';
		}
	?>

	<ul>
		<?php foreach($books as $book): ?>
			<li>
				<?= printableTitle($book); ?>
			</li>
		<?php endforeach; ?>
	</ul>
</body>
</html>