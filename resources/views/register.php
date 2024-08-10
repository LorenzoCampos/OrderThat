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

<div class="header-container">
  <div class="logo-container">
    <a href="../public"><img class="logo" src="../resources/static/img/Logo/rub-white.png" alt="logo" width="50px"></a>
  </div>    
</div>

<body>
  <div class="form-container">

    <form action="../public/registerRequest" method="post">
      <h1>Registrarse</h1>

      <input type="mail" name="email" placeholder="Email..."
      
      value="<?php
      if (isset($email)) { echo $email; }
      ?>" required>
      
      <?php
      if (isset($_SESSION['error_message']))
      {
        $errorMessage = $_SESSION['error_message'];
        echo "<h3>$errorMessage!</h3>";
        unset($_SESSION['error_message']);
      }
      ?>
      
      <input type="password" name="password" placeholder="Contraseña..." value="" required>
      <input type="submit" value="Registrarse">
    </form>
    <!-- $data_user -->
    <h3>¿Ya tienes cuenta?</h3>
      <a href="../public/login"><button class="button-register"><h3>Iniciar Sesión</h3></button></a>

  </div>

</body>
</html>