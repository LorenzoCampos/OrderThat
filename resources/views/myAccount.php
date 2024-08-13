<?php

include "partials/initSession.php";

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="../resources/static/img/Logo/rub-white.png">
	<link rel="stylesheet" href="../resources/static/css/main.css">
	<link rel="stylesheet" href="../resources/static/css/account.css">
	<title>Mi cuenta</title>
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
			<a href="../public/myAddresses"><p>Direcciones</p></a>
			<a href="../public/myPayment"><p>Metodos de Pago</p></a>
			<a href="../public/myRecentOrders"><p>Historial de pedidos</p"></a>
		</div>
	</div>
</div>

<body>

<?php
if (isset($requestPassword)) {
?>
	<h1>Cambiar Contraseña</h1>
	<div class="form-container">
		<form action="../public/changePasswordRequest" method="post">

		<h4><label for="password">Contraseña actual:</label></h4>
		<input type="password" name="current_password">

		<h4><label for="password">Nueva Contraseña:</label></h4>
		<input type="password" name="new_password">

		<h4><label for="password">Repetir Nueva Contraseña:</label></h4>
		<input type="password" name="repeat_new_password">

		<div class="button-container">
			<input class="button-modif" type="submit" value="Cambiar Contraseña" id="buttonModif2">
		</div>
	</form>
	</div>

<?php
} else if (isset($request)) {
?>
	<h1>DATOS PERSONALES</h1>
	<div class="form-container">
		<form action="../public/myAccountRequest" method="post">

			<h4><label>Nombre:</label></h4>
			<input type="text" name="first_name" value="<?= $request['first_name'] ?>">

			<h4><label>Apellido:</label></h4>
			<input type="text" name="last_name" value="<?= $request['last_name'] ?>">

			<h4><label>Teléfono:</label></h4>
			<input type="number" name="phone_number" value="<?= $request['phone_number'] ?>">

			<h4><label>Email:</label></h4>
			<input type="mail" name="email" value="<?= $request['email'] ?>" required>

			<div class="button-container">
				<input class="button-modif" type="submit" value="Modificar" id="buttonModif">
			</div>

		</form>
	</div>

	<div class="link-container">
		<a class="link" href="../public/changePassword"><p class="link-text">Cambiar contraseña</p></a>
	</div>

	

<?php
}
?>

<script src="../resources/static/js/alerts.js"></script>

</body>

<html>