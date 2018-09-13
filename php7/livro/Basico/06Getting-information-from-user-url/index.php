<?php 
	$looking = isset($_GET['title']) || isset($_GET['author']);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>Bookstore</title>
 	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
 </head>
 <body>
 	<div class="container" style="margin-top: 50px;">
 		<div class="row">
 			<div class="col-md-12">
 				<p>You lookin' ? <?php echo (int) $looking; ?></p>
 				<p>The book you are looking for is</p>
 				<ul>
 					<li><b>Title</b>: <?php echo $_GET['title']; ?></li>
 					<li><b>Author</b>: <?php echo $_GET['author']; ?></li>
 				</ul>
 			</div>
 		</div><!--/.row-->
 	</div><!--/.container-->
 </body>
 </html>