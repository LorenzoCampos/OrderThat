<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="icon" href="../resources/static/img/Logo/rub-white.png">
    <link rel="stylesheet" href="../resources/static/css/main.css">
    <link rel="stylesheet" href="../resources/static/css/home.css">
</head>

<div class="header-container">

    <div class="logo-container">
        <a href="../public"><img class="logo" src="../resources/static/img/Logo/rub-white.png" alt="logo" width="50px"></a>
    </div>

    <?php
    
    // chequear las sesiones

    if (isset($_SESSION['id'])) {  ?>
        <div class="button-logout-container">
            <a href="../public"><button class="button-logout"><h3>Cerrar Sesión</h3></button></a>
        </div>
    <?php } else { ?>
        <div class="button-login-container">
            <a href="../public/login"><button class="button-login"><h3>Iniciar Sesión</h3></button></a>
        </div>
    <?php } ?>
</div>

<body>
    <h1></h1>

    <h1>CARTA</h1>

    <div class="menu-container">

    <?php

    foreach ($request as $key => $value)
    {
        ?>

        <div class="container_product">

            <div class="img-container">
                <img src="<?= $value['image_path'] ?>" width="200px">
            </div>

            <h2><?= $value['description'] ?></h2>
            <h3>$<?= $value['price'] ?></h3>

            <a href="../public/editProduct/<?= $value['id'] ?>">Editar</a>

        </div>

        <?php
    }

    ?>
    </div>
    
</body>

</html>