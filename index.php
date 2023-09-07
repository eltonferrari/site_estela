<!doctype html>
<html lang="pt-br">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- COMPATIBILIDADE COM HTML5 -->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
		<![endif]-->

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/Bootstrap4/css/bootstrap.min.css">

		<!-- NORMALIZE CSS -->
		<link   rel="stylesheet" type="text/css" href="assets/css/normalize.css">

		<!-- CSS CUSTOMIZADO -->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">

		<link rel="icon" href="img/icons/brigadeiro_icon.png" type="image/x-icon">
		<title>Estela Ferrari</title>
	</head>
	<body>
		<header>
			<?php include 'templates/menu.php'; ?>
		</header>
		<section>
			<div class="text-center">
				<h1 class="animate-character">Tortas, doces e salgados diferenciados</h1>
				<div class="img1">
					<div class="row"><!--Row -->
						<div class="col-sm-6 m-auto d-flex justify-content-center"><!--col-sm8 -->
							<div id="video" class="section embed-responsive embed-responsive-4by3 m-auto">
								<video class="embed-responsive-item d-flex justify-content-center m-auto" autoplay loop muted>
									<source src="img/video/video.mp4" type="video/mp4">
										Your browser does not support the video tag.
								</video>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer class="fixed-botton">
			<?php include 'templates/footer.php'; ?>
		</footer>
		<?php include 'templates/js-bootstrap.php'; ?>
	</body>
</html>