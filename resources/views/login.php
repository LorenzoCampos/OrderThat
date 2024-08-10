<?php

include "partials/initSession.php";

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión</title>
  <link rel="stylesheet" href="../resources/static/css/main.css">
  <link rel="stylesheet" href="../resources/static/css/login.css">
</head>

<nav>
	<div class="nav-container">
		<div class="nav-item">
			<a href="../public"><img src="../resources/static/img/Logo/rub-white.png"></a>
		</div>
	</div>
</nav>

<body>

  <h1>Iniciar Sesión</h1>
  <div class="form-container">

    <form action="../public/loginRequest" method="post">

      <input type="mail" name="email" placeholder="Email..." required>
      <input type="password" name="password" placeholder="Contraseña..." required>
      <input type="submit" value="Iniciar Sesión">
    </form>

    <div class="button-container">
      <h3>¿No tienes cuenta?</h3>
      <a href="../public/register"><button class="button-register"><h3>Registrarse</h3></button></a>
    </div>
  
  </div>

</body>
</html>