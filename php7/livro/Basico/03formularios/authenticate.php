<?php
	unset($_POST['login']);
	$submitted = (empty($_POST['username']) || empty($_POST['password'])) ? 0 : 1;
	//var_dump($_POST, $submitted);
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulários</title>
	<link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3" class="text-center" style="margin-top: 300px;">
				<?php 
					$status = ($submitted == 1) ? 'Enviado !!!' : 'Erro ao enviar !!!';
				 ?>
				<p class="alert alert-info"><strong>Estatus:</strong> <?= $status; ?></p>
				<p style="color: #fff; font-variant: small-caps;">Your login info is:</p><hr>
				<ul>
					<li><strong>Username</strong> : <?php echo $_POST['username']; ?></li>
					<li><strong>Password</strong> : <?php echo $_POST['password']; ?></li>
				</ul>

				<a href="login.html" title="" class="btn btn-success btn-block">Voltar</a>
			</div>
		</div><!--/.row-->
	</div><!--/.container-->

	<script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
</body>
</html>