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

    <form action="../public/loginRequest" method="post">
      <h1>Iniciar Sesión</h1>

      <input type="mail" name="email" placeholder="Email..." required>
      <input type="password" name="password" placeholder="Contraseña..." required>
      <input type="submit" value="Iniciar Sesión">
    </form>

      <h3>¿No tienes cuenta?</h3>
      <a href="../public/register"><button class="button-register"><h3>Registrarse</h3></button></a>

  </div>

</body>
</html>