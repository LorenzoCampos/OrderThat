<?php

include "verifyStartedSession.php";

?>

<!DOCTYPE html>
<html class="html-users" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="static/css/style.css">

</head>
<body>

<main class="main-users">

    <div class="container-users-log_in">

        <div class="form-users">

            <h1>Iniciar Sesión</h1>

            <form method="post" action="log_in.php">

                <div class="form-users_item username">
                
                    <label for="username">Username<span>*</span></label>
                    
                    <input type="text" name="username" id="username" required>

                </div>

                <div class="form-users_item password">

                    <label for="password">Password<span>*</span></label>

                    <input type="password" name="pass" id="password" required>

                </div>

                <div class="form-users_submit">
                    <button type="submit" name="submit">Log In</button>
                </div>

            </form>

        </div>

        <div class="message-users">

            <div class="message-users_text">
                <p>¿No tenes una cuenta?</p>
            </div>

            <div id="message-users_redirect" class="message-users_redirect">
                <a href="sing_up.php">
                    <p>Crear Cuenta</p>
                </a>
            </div>

        </div>

    </div>

</main>

</body>
</html>

<?php 

if (isset($_POST["submit"])) {

include "connection.php";

$username = $_POST['username'];
$pass = $_POST['pass'];

$verifyQuery = "SELECT * FROM users WHERE username = '$username' AND pass = '$pass'";
$verifyResult = mysqli_query($connection, $verifyQuery);

if ($verifyResult) {
    $countRow = mysqli_num_rows($verifyResult);
    if ($countRow == 1) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: index.php");
    } elseif ($countRow > 1) {
        echo 'Error. El usuario existe 2 veces o mas.';
    } else {
        echo 'El usuario no existe o el nombre de usuario y/o la contraseña son incorrectos.';
    }
}else {
    echo 'Error al verificar las credenciales';
}

mysqli_close($connection);

}

?>