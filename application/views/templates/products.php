<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Mis Barbacoas  - <?=APPNAME?></title>
	<link rel="stylesheet" href="<?php echo base_url('stylesheets/css/')?>myProducts_styles.css">
	<?php include APPPATH . 'views/inc/head.php' ?>
</head>
<body>
	<header>
		<?php include APPPATH . 'views/inc/nav.php' ?>
	</header>

	<main>
		<div class="wrapper">
			<h2>Mis Barbacoas</h2>
			
			<?php if(true): ?>

				<div class="barbacoas_wrapper">
					<?php for($i = 0; $i < 11; $i++): ?>
						<?php include APPPATH . 'views/inc/item.php'; ?>
					<?php endfor; ?>
				</div>


			<?php else: ?>
				<div class="barbacoas_wrapper none">
					<p>No tienes Barbacoas actualmente</p>
				</div>
			<?php endif; ?>
		</div>
	</main>

	<?php include APPPATH . 'views/inc/footer.php' ?>
</body>
</html>