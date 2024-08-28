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
			
				<div class='product__item-container'>

					<a class='link-container' href="#">
						<div class='product__item-container__img'>

							<img src="<?= $value['image_path'] ?>">

						</div>
					</a>
					
					<div class='product__description-container'>
						<div class='product__description'>

							<span class="product__description-name"><b><?= $value['name'] ?></b></span>

							<span class="product__description-description"><?= $value['description'] ?></span>

							<span class="product__description-price"><b>$<?= $value['price'] ?></b></span>

							<a class="link" href="../public/addProductCart<?= $value['id'] ?>">
								<div class='product__description-btn'>
									<span>Agregar</span>
								</div>
							</a>
							
							<?php
							if (isset($_SESSION['type'])){
								if ($_SESSION['type'] == "admin") {
							?>
							<a class="link" href="../public/editProduct<?= $value['id'] ?>">
								<div class='product__description-btn'>
									<span>Modificar</span>
								</div>
							</a>
							<?php
								}
							}
							?>
						</div>
					</div>
				</div>
			</div>

		<?php
		}

		if (isset($_SESSION['type'])){

			if ($_SESSION['type'] == "admin") {

		?>
			<div class='product-add'>
			<a href="../public/createProduct">
				<div class="container">

					<div class="container__container">

						<div class="container__container__1"></div>

						<div class="container__container__2"></div>

					</div>

				</div>
			</a>
			</div>
		<?php
			}
		}
		?>
	</div>

</body>

</html>