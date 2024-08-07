<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="../resources/static/css/main.css">
    <link rel="stylesheet" href="../resources/static/css/home.css">
</head>

<header>
    <nav>
        <div id="header-container">
            <a href="../public"><img src="" alt="logo"></a>
            <form action="" id="input-header">
                <input class="search-bar" type="text" name="" id="" placeholder="Busqueda">
            </form>
            <a href="../public/login">Iniciar Sesión</a>
        </div>
    </nav>
</header>

<body>   
    <h1>CARTA</h1>

    <div class="menu-container">

    <?php

    foreach ($request as $key => $value)
    {
        ?>

        <div>

            <img src="<?= $value['image_path'] ?>" width="200px">

            <h2><?= $value['description'] ?></h2>
            <h2><?= $value['price'] ?></h2>

            <a href="../public/editProduct/<?= $value['id'] ?>">Editar</a>

        </div>

        <?php
    }

    ?>
    </div>
    
</body>
</html>