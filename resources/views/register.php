<?php

include "partials/initSession.php";

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión</title>
  <link rel="icon" href="../resources/static/img/Logo/rub-white.png">
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

  <h1>Registrarse</h1>
  <div class="form-container">

    <form action="../public/registerRequest" method="post">

      <input type="mail" name="email" placeholder="Email..."
      
      value="<?php
      if (isset($email)) { echo $email; }
      ?>" required>
      
      <?php
      if (isset($_SESSION['error_message']))
      {
        $errorMessage = $_SESSION['error_message'];
        echo "<p>$errorMessage!</p>";
        unset($_SESSION['error_message']);
      }
      ?>
      
      <input type="password" name="password" placeholder="Contraseña..." value="" required>
      <input type="submit" value="Registrarse">
    </form>
  </div>

  <div class="register-link">
    <p>¿Ya tienes cuenta?</p>
    <a href="../public/login"><p>Iniciar Sesión<p></a>
  </div>

</body>
</html>