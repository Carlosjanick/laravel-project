<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<title>LookBooks</title>
	<style type="text/css" media="screen">
		table{margin-top: 20px;}
		table td{font-size: 10px;}
		span{font-size: 11px; color: #fff;}
	</style>
</head>
<body>
	<?php 
		$bookJson = file_get_contents(__DIR__ . '/books.json');
		$books = json_decode($bookJson, true);
	?>
	<div class="container" style="margin-top: 50px;">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<?php 
					if(isset($_GET['title'])){
						foreach ($books as $key => $book) {
							if($book['title'] == $_GET['title']){
								if($book['available']){
									echo '<span class="alert alert-info">Booked</span>';
									$books[$key]['available'] = false;

									$bookJson = json_encode($books);
									$books = file_put_contents(__DIR__. '/books.json', $bookJson);
								}else{
									echo '<span class="alert alert-danger">Livro Indisponivel!</span>';
								}
							}
						}
					}else{
						echo '<span class="alert alert-info">Nehum livro reservado.</span>';
					}
				?>
				<table class="table">
					<thead>
						<tr>
							<th>Titulo</th>
							<th>Author</th>
							<th>Disponibilidade</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$bookJson = file_get_contents(__DIR__ . '/books.json');
							$books = json_decode($bookJson, true);
						?>

						<?php foreach($books as $key => $book): ?>
						<tr>
							<td><?= $book['title']; ?></td>
							<td><?= $book['author']; ?></td>
							<?php $dispo = ($book['available']) ? 'Sim' : 'Não';  ?>
							<td><?= $dispo; ?></td>
							<td><a href="?title=<?= $book['title']; ?>">Selecionar</a></td>
						</tr>

						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>