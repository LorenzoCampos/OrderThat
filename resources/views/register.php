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

  <h1>Registrarse</h1>

    <form action="../public/registerRequest" method="post">
      <input type="text" name="email" placeholder="Email...">
      <input type="password" name="password" placeholder="Contraseña...">

      <input type="submit" value="Registrarse">
      <a class="button-register" href="../public/login"><h3>Iniciar Sesión</h3></a>
    </form>
  
</body>
</html>