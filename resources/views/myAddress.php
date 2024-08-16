<?php

include "partials/initSession.php";

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mis Direcciones</title>
  <link rel="icon" href="../resources/static/img/Logo/rub-white.png">
  <link rel="stylesheet" href="../resources/static/css/main.css">
  <link rel="stylesheet" href="../resources/static/css/account.css">
</head>

<nav>
	<div class="nav-container">
		<div class="nav-item">
			<a href="../public"><img src="../resources/static/img/Logo/rub-white.png"></a>
		</div>

		<div class="nav-item-user">
			<div class="nav-item">
				<a href="../public/cart"><b>Mis pedidos</b></a>
				<a href="../public/"><b>Inicio</b></a>
			</div>

			<div class="nav-item">
				<a href="../public/logout"><b>Cerrar Sesión</b></a>
			</div>
		</div>
	</div>
</nav>

<div class="sub-nav-container">
	<div class="sub-nav-container__item">
		<div class="change-link">
			<a href="../public/myAccount"><p>Datos Personales</p></a>
			<a href="../public/myAddress"><p>Direcciones</p></a>
			<a href="../public/myPayment"><p>Metodos de Pago</p></a>
			<a href="../public/myRecentOrders"><p>Historial de pedidos</p></a>
		</div>
	</div>
</div>

<body>

<?php
if (isset($requestAddress)) {
?>
	<h1>NUEVA DIRECCIÓN</h1>
	<div class="form-container">
		<form action="../public/newAddressRequest" method="post">

		<h4><label for="address">Nueva Dirección:</label></h4>
		<input type="address" name="new_address">

		<div class="button-container">
			<input class="button-modif" type="submit" value="Cambiar Direccíon" id="buttonModifAddress2">
		</div>
	</form>
	</div>

<?php
} else if (isset($request)) {
?>
	<h1>MIS DIRECCIONES</h1>
	<div class="form-container">
		<form action="../public/myAddressRequest" method="post">

			<h4><label>Dirección:</label></h4>
			<input type="text" name="address" value="<?= $request['address'] ?>">

			<h4><label>Número:</label></h4>
			<input type="text" name="address_number" value="<?= $request['address_number'] ?>">

			<h4><label>Localidad:</label></h4>
			<input type="number" name="localidad" value="<?= $request['localidad'] ?>">

			<h4><label>Provincia:</label></h4>
			<input type="mail" name="provincia" value="<?= $request['provincia'] ?>" required>

			<div class="button-container">
				<input class="button-modif" type="submit" value="Modificar" id="buttonModifAddress2">
			</div>

		</form>
	</div>

	<div class="link-container">
		<a class="link" href="../public/newAddress"><p class="link-text">Agregar direcciones</p></a>
	</div>

<?php
}
?>

<script src="../resources/static/js/alerts.js"></script>

</html>