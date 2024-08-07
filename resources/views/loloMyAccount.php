<?php

include "verifySession.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Cuenta</title>

<?php

include "nav.php";

include "connection.php";



echo '<main class="main-users">';

$user = $_SESSION['username'];

$Query = "SELECT * FROM users WHERE username = '$user'";
$result = mysqli_query($connection, $Query);

if ($result) {
    $countRow = mysqli_num_rows($result);
    if ($countRow == 1) {

        $row = mysqli_fetch_row($result);

        if (isset($_POST['submitEdit'])) {
            ?>
            <div class="my-account-container">

            <div class="my-account-form">

                <form action="myAccount.php" method="post">

                    <div class="my-account-users_item username">
            
                        <label for="username">Username<span>*</span></label>
            
                        <input type="text" name="username" id="username" value="<?php echo $row[1] ?>" required>

                    </div>

                    <div class="my-account-users_item email">
            
                        <label for="email">Email<span>*</span></label>
                
                        <input type="email" name="email" id="email" value="<?php echo $row[2] ?>" required>

                    </div>

                    <div class="my-account-users_item password">

                        <label for="password">Current Password<span>*</span></label>

                        <input type="password" name="pass" id="password" required>

                    </div>

                    <div class="my-account-users_item password">

                        <label for="password2">New Password<span>*</span></label>

                        <input type="password" name="pass2" id="password2" required>

                    </div>

                    <div class="my-account-users_item password">

                        <label for="password3">Repeat New Password<span>*</span></label>

                        <input type="password" name="pass3" id="password3" required>

                    </div>

                    <div class="my-account-users_submit save">
                        <button type="submit" name="submitSave">Guardar</button>
                    </div>

                </form>

            </div>

            </div>

            <?php
        } else if (isset($_POST['submitSave'])) {

            $username = $_POST['username'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $pass2 = $_POST['pass2'];
            $pass3 = $_POST['pass3'];

            $valideQuery = "SELECT * FROM users WHERE username = '$user' AND pass = '$pass'";
            $valideResult = mysqli_query($connection, $valideQuery);

            if ($valideResult) {

                $countRow = mysqli_num_rows($valideResult);

                if ($countRow == 1) {

                    if ($pass2 == $pass3) {

                        $updateQuery = "UPDATE users SET username = '$username', email = '$email', pass = '$pass2' WHERE username = '$user'";
                        $updateResult = mysqli_query($connection, $updateQuery);

                        if ($updateResult) {
                            $_SESSION['username'] = $username; 

                            $message = '<h2 style="color: green;">Cuenta actualizada</h2>';
                        } else {
                            $message = '<h2 style="color: crimson;">Error al actualizar la cuenta</h2>';
                        }
                    } else {
                        $message = '<h2 style="color: crimson;">Las contraseñas no coinciden</h2>';
                    }
                } else {
                    $message = '<h2 style="color: crimson;">La contraseña actual es incorrecta</h2>';
                }
            } else {
                $message = '<h2 style="color: crimson;">Error al verificar las credenciales</h2>';
            }

            $_SESSION['error_message'] = $message;

            header('Location: myAccount.php');

        } else {
            ?>

            <div class="my-account-container">

            <div class="my-account-form">

                <form action="myAccount.php" method="post">

                <?php

                if (isset($_SESSION['error_message'])) {

                    $errorMessage = $_SESSION['error_message'];
                    echo "<h2>$errorMessage</h2>";
                    unset($_SESSION['error_message']);
                }

                ?>

                <h1>Vista de Cuenta</h1>

                <div class="my-account-users_item username">

                    <label for="username">Username<span>*</span></label>

                    <input type="text" name="username" id="username" value="<?php echo $row[1] ?>" required readonly>

                </div>

                <div class="my-account-users_item email">

                    <label for="email">Email<span>*</span></label>

                    <input type="email" name="email" id="email" value="<?php echo $row[2] ?>" required readonly>

                </div>

                <div class="my-account-users_submit edit">
                    <button type="submit" name="submitEdit">Modificar</button>
                </div>

                </form>
            
            </div>

            </div>

            <?php
        }
    } elseif ($countRow > 1) {
        echo 'Error. El usuario existe 2 veces o mas.';
    } else {
        header('Location: index.php');
    }
}else {
    echo 'Error al verificar las credenciales';
}

echo '</main>';

mysqli_close($connection);