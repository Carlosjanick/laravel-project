<?php  require('functions.php'); ?>
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

			<div class="col-md-12">
				<div class="text-center" style="margin-top: 300px;"><a href="#" data-toggle="modal" data-target="#login-modal" class="btn btn-success">Entrar na sua conta: <?php echo loginMessages(); ?></a></div>

				<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
					<div class="modal-dialog">
						<div class="loginmodal-container">
							<h1>Entrar | Conta</h1><br>
							<form method="post" action="authenticate.php">
								<input type="text" name="username" placeholder="Username">
								<input type="password" name="password" placeholder="Password">
								<input type="submit" name="login" class="login loginmodal-submit" value="Entrar">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div><!--/.container-->

	<script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
</body>
</html>