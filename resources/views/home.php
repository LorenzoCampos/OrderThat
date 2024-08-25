<?php

include "partials/initSession.php";

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio</title>
	<link rel="icon" href="../resources/static/img/Logo/rub-white.png">
	<link rel="stylesheet" href="../resources/static/css/main.css">
	<link rel="stylesheet" href="../resources/static/css/home.css">
</head>

<?php

include "partials/nav.php";

?>

<body>

	<h1>CARTA</h1>

	<div class='products-container'>

		<?php
		foreach ($request as $key => $value) {
		?>

			<div class='product'>
			
				<div class='product-item-container'>

					<a class='link-container' href="#">
						<div class='img-container'>

							<img src="<?= $value['image_path'] ?>">

						</div>
					</a>
					
					<div class='product-description-container'>
						<div class='product-description'>

							<span><b><?= $value['name'] ?></b></span>

							<span><b>Precio: $<?= $value['price'] ?></b></span>

							<a class="link" href="../public/editProduct<?= $value['id'] ?>">
								<div class='product-description-btn'>
									<span>Modificar</span>
								</div>
							</a>

						</div>
					</div>
				</div>
			</div>

		<?php
		}
		?>
			<div class='product'>
			<a href="../public/createProduct">
				<div class="container">

					<div class="container__container">

						<div class="container__container__1"></div>

						<div class="container__container__2"></div>

					</div>

				</div>
			</a>
			</div>

	</div>

	<script src="../resources/static/js/darkMode.js"></script>

</body>

</html>