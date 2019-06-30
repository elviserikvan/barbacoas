<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login - <?=APPNAME?></title>
	<link rel="stylesheet" href="<?php echo base_url() ?>stylesheets/css/login_styles.css">
	<?php include APPPATH . 'views/inc/head.php' ?>
</head>
<body>
	<header>
		<?php include APPPATH . 'views/inc/nav.php' ?>
	</header>

	<main>	
		<form action="#" method="POST">
			<div class="name">
				<p id="email-error">Lorem ipsum dolor.</p>
				<input type="text" name="email" id="email" placeholder="Email">
			</div>

			<div class="pass">
				<p id="pass-error">Lorem ipsum dolor.</p>
				<input type="password" name="pass" id="pass" placeholder="Contraseña">
			</div>

			<input id="login_btn" type="submit" value="Iniciar session">
		</form>

		<hr>
		<p>¿No tienes cuenta? <a href="#">Registrate</a></p>

	</main>

 	<?php include APPPATH . "views/inc/footer.php" ?>
 	<script src="<?php echo base_url() ?>js/login_scripts.js"></script>
</body>
</html>