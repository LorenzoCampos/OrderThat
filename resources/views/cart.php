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

<main class="main-cart">

<div class="title-container">
	<h1 class="title-container__text">Carrito</h1>
</div>

<div class="ganeral-container">

	<div class="general-container__list-products">

	<?php
	foreach ($request as $key => $value) {
	?>

		<div class="general-container__list-products__product">

			<div class="general-container__list-products__product__image-container">
				<img src="<?= $value["image_path"] ?>" alt="imagen del producto" class="general-container__list-products__product__image-container__image">
			</div>

			<div class="general-container__list-products__product__info-container"> <!-- Nombre del producto y los botones eliminar y modificar -->
				<div class="general-container__list-products__product__info-container__title">
					<p><?= $value["name"] ?></p>
				</div>

				<div class="general-container__list-products__product__info-container__buttons">
					<button href="../public/cartRequest:<?= $value["id_cart"] ?>d">Eliminar</button>
					<button href="#">Modificar</button>
				</div>
			</div>
			
			<div class="general-container__list-products__product__ap-container"><!-- ap = amount y precio -->

				<div class="general-container__list-products__product__ap-container__amount">
					<div class="general-container__list-products__product__ap-container__amount__plus">
						<p>+</p>
					</div>
					<div class="general-container__list-products__product__ap-container__amount__number">
						<p><?= $value["amount"] ?></p>
					</div>
					<div class="general-container__list-products__product__ap-container__amount__minus">
						<p>-</p>
					</div>
				</div>

				<div class="general-container__list-products__product__ap-container__price">
					<p>$ <?= $value["price"] ?></p>
				</div>

			</div>

		</div>

	<?php 
	}
	?>
	</div>

	<div class="general-container__resumen">

	<div></div>

	</div>

</div>

</main>

</body>

</html>