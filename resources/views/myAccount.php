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

<body>

	<h1>Mi cuenta</h1>
	<div class="form-container">
		<form action="../public/myAccount" method="post">
			<h4><label for="first_name">Nombre:</label></h4>
			<input type="text" id="first_name" name="first_name">

			<h4><label for="last_name">Apellido:</label></h4>
			<input type="text" id="last_name" name="last_name">

			<input type="text" name="adress">

			<input type="number" name="phone_number">
			<input type="mail" name="email" required>

			<div class="button-container">
				<input class="button-modif" type="submit">
			</div>
			
		</form>
	</div>


</body>

<html>