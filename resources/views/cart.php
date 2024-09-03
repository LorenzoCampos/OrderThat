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
	<link rel="stylesheet" href="../resources/static/css/cart.css">
</head>

<?php

include "partials/nav.php";

?>

<body>

	<div class="title-container">
		<h1>Carrito</h1>
	</div>

	<main class="main-cart">

		<div class="ganeral-container">

			<div class="general-container__list-products">

				<?php
				foreach ($request as $key => $value) {
				?>

					<div class="general-container__list-products__product">

						<div class="general-container__list-products__product__image-container">
							<img src="<?= $value["image_path"] ?>" alt="imagen del producto">
						</div>

						<div class="general-container__list-products__product__info-container"> <!-- Nombre del producto y los botones eliminar y modificar -->
							<div class="general-container__list-products__product__info-container__text">
								<p><?= $value["name"] ?></p>
							</div>

							<div class="general-container__list-products__product__info-container__buttons">
								<button href="../public/cartRequest:<?= $value["id_cart"] ?>d">Eliminar</button>
								<button href="#">Modificar</button>
							</div>

							<div class="general-container__list-products__product__ap-container"><!-- ap = amount y precio -->

								<div class="general-container__list-products__product__ap-container__amount">
									<div class="general-container__list-products__product__ap-container__amount__minus">
										<a id="minus" href="../public/minusAmount<?= $value["id_cart"] ?>">
											<p>-</p>
										</a>
									</div>
									<div class="general-container__list-products__product__ap-container__amount__number">
										<p id="amount"><?= $value["amount"] ?></p>
									</div>
									<div class="general-container__list-products__product__ap-container__amount__plus">
										<a href="../public/plusAmount<?= $value["id_cart"] ?>">
											<p>+</p>
										</a>
									</div>
								</div>

								<div class="general-container__list-products__product__ap-container__price">
								<p id="price">$ </p>
								</div>
								<p hidden id="price-static"><?= $value["price"] ?></p>
							</div>

						</div>

					</div>

				<?php
				}
				?>
			</div>

		</div>

		<div class="general-container__resumen">

			<div class="general-container__resumen__buy">

				<div class="general-container__resumen__buy__resume">
					<p>Resumen de la compra</p>
				</div>

				<div class="general-container__resumen__buy__costs">
					<div class="general-container__resumen__buy__costs__products">
						<p></p><!-- Label, pueden ser: Producto, Productos (2), Productos (5) -->
						<p></p><!-- Monto total de todos los productos del carrito -->
					</div>

					<div class="general-container__resumen__buy__costs__send">
						<p></p><!-- label "Envio" -->
						<p></p><!-- Importe del envio -->
					</div>
				</div>

				<div class="general-container__resumen__buy__checkout">
					<div class="general-container__resumen__buy__checkout__total">
						<p></p><!-- Label, puede ser: Total, Importe Total, etc. -->
						<p></p><!-- Importe total sumando todos los productos mas el envio -->
					</div>
					<a href=""><button>Finalizar Compra</button></a><!-- Nose como hacer para finalizar la compra, despues lo analizamos -->
				</div>

			</div>

			<div class="general-container__resumen__continue-shopping">
				<a href="../public/"><button>Seguir Comprando</button></a>
			</div>

		</div>

	</main>

</body>

<script src="../resources/static/js/cart.js"></script>

</html>