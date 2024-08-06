<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión</title>
  <link rel="stylesheet" href="../resources/static/css/main.css">
  <link rel="stylesheet" href="../resources/static/css/login.css">
</head>

<header>
  <nav>
      <div id="header-container">
        <img src="." alt="logo">
      </div>
  </nav>
</header>

<body>

  <h1>Iniciar Sesión</h1>

    <form action="../public/loginRequest" method="post">
      <input type="text" name="email" placeholder="Email..." required>
      <input type="password" name="password" placeholder="Contraseña..." required>
      <input type="submit" value="Iniciar Sesión">
      <a class="button-register" href="../public/register"><h3>Registrarse</h3></a>
    </form>
  
</body>
</html>