<?php

include "partials/initSession.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/static/css/main.css">
	<link rel="stylesheet" href="../resources/static/css/usersLolo.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<main class="main-users">

    <?php if (isset($request)) { ?>

        <div class="my-account-container">

        <div class="my-account-form">

            <form action="../public/myAccountRequest" method="post">

                <div class="my-account-users_item username">
            
                    <label for="first_name">Username<span>*</span></label>

                    <input type="text" name="first_name" id="first_name" value="<?= $request['first_name'] ?>">

                </div>

                <div class="my-account-users_item username">
            
                    <label for="last_name">Username<span>*</span></label>

                    <input type="text" name="last_name" id="last_name" value="<?= $request['last_name'] ?>">

                </div>

                <div class="my-account-users_item email">
        
                    <label for="email">Email<span>*</span></label>
            
                    <input type="email" name="email" id="email" value="<?= $request['email'] ?>" required>

                </div>

                <div class="my-account-users_item password">

                    <label for="password">Current Password<span>*</span></label>

                    <input type="password" name="password" id="password" required>

                </div>

                <div class="my-account-users_item password">

                    <label for="new_password">New Password<span>*</span></label>

                    <input type="password" name="new_password" id="new_password" required>

                </div>

                <div class="my-account-users_item password">

                    <label for="repeat_new_password">Repeat New Password<span>*</span></label>

                    <input type="password" name="repeat_new_password" id="repeat_new_password" required>

                </div>

                <div class="my-account-users_submit save">
                    <button type="submit">Guardar Cambios</button>
                </div>

            </form>

        </div>

        </div>

    <?php } else { ?>

            <div class="my-account-container">

            <div class="my-account-form">

                <form action="../public/myAccountRequest" method="post">

                <?php

                if (isset($_SESSION['error_message'])) {

                    $errorMessage = $_SESSION['error_message'];
                    echo "<h2>$errorMessage</h2>";
                    unset($_SESSION['error_message']);
                }

                ?>

                <h1>Vista de Cuenta</h1>

                <div class="my-account-users_item username">
            
                    <label for="first_name">Nombre<span>*</span></label>

                    <input type="text" name="first_name" id="first_name" value="<?= $before_request['first_name'] ?>" readonly>

                </div>

                <div class="my-account-users_item username">
            
                    <label for="last_name">Apellido<span>*</span></label>

                    <input type="text" name="last_name" id="last_name" value="<?= $before_request['last_name'] ?>" readonly>

                </div>

                <div class="my-account-users_item email">

                    <label for="email">Email<span>*</span></label>

                    <input type="email" name="email" id="email" value="<?= $before_request['email'] ?>" required readonly>

                </div>

                <div class="my-account-users_submit edit">
                    <button type="submit">Modificar</button>
                </div>

                </form>
            
            </div>

            </div>

    <?php } ?>
</main>