<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="icon" href="../resources/static/img/Logo/rub-white.png">
    <link rel="stylesheet" href="../resources/static/css/mainLolo.css">
    <link rel="stylesheet" href="../resources/static/css/homeLolo.css">
</head>

<nav>
    <div class="nav-ul_container">
        <div class="nav-item"><a href="../public"><img src="../resources/static/img/Logo/rub-white.png"></a></div>

        <?php
            if (isset($_SESSION['id'])) {
        ?>
            <div class="nav-item"><a href="../public/myAccount"><b>Mi Cuenta</b></a></div>
            <div class="nav-item"><a href="#"><b>Cerrar Sesion</b></a></div>
        <?php
            } else {
        ?>
            <div class="nav-item"><a href="../public/login"><b>Iniciar Sesion</b></a></div>
        <?php
            }
        ?>
    </div>
</nav>

<body class="body-container">

    <h1>CARTA</h1>

<div class='item-general_container'>

<?php
    foreach ($request as $key => $value)
    {
?>

<div class='item__div'>
    <div class='item_container'>
        <a class='item__link-container' href='#'>
            <div class='item__img-container'>

                <img src="<?= $value['image_path'] ?>">

            </div>
        </a>
        <div class='item__description'>
            <div class='item__descrption-container'>

                <span><b><?= $value['description'] ?></b></span>

                <span><b>Precio: $<?= $value['price'] ?></b></span>

                <a href="../public/editProduct/<?= $value['id'] ?>">
                    <div class='item__description-btn'>
                        <span>Modificar</span>
                    </div>
                </a>
                <!--

                // Permisos de Administrador

                <a href='../public/'>
                    <div class='item__description-btn'>
                        <span>Modificar</span>
                    </div>
                </a>

                <a href='products.php?id=$row[0]'>
                    <div class='item__description-btn'>
                        <span>Borrar</span>
                    </div>
                </a> -->
                
        </div>
        </div>
    </div>
</div>

<?php
    }
?>

</div>
</main>
</html>