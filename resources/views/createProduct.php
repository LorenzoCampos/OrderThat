<?php

include "partials/initSession.php";

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio</title>
	<link rel="icon" href="../resources/static/img/Logo/rub-white.png">
	<link rel="stylesheet" href="../resources/static/css/main.css">
	<link rel="stylesheet" href="../resources/static/css/createProduct.css">
</head>

<?php

include "partials/nav.php";

?>

<body>

<main class="main-add-product">

<div class="title-container">
	<h1 class="title-container__text">
    Agregar Producto
	</h1>
</div>

<div class="general-container">

    <div class="general-container__form-add">

        <form method='post' action='../public/createProductRequest' enctype='multipart/form-data'>

        <div class="general-container__form-add__image-form">
            <div class="general-container__form-add__image-form__image-container">
                <img id="preview-image" src="../resources/static/img/default/default.png" alt="imagen del producto">
            </div>
            <input type="file" name="image" id="image" hidden required>
            <label for="image">Cambiar foto</label>
        </div>

        <div class="general-container__form-add__item-form">
            <label for="name">Nombre del Producto</label>
            <input type="text" name="name" id="name" maxlength="50" required>
        </div>

        <div class="general-container__form-add__pl">

            <div class="general-container__form-add__item-form">
                <label for="price">Precio</label>
                <input type="number" step="0.01" name="price" id="price" required>
            </div>

            <div class="general-container__form-add__item-form">
                <label for="stock">Stock</label>
                <input type="number" name="stock" id="stock" required>
            </div>
    
        </div>

        <div class="general-container__form-add__item-form">
            <label for="description">Descripcion</label>
            <input type="text" name="description" id="description" maxlength="100" required>
        </div>

        <div class="general-container__form-add__item-form">
            <button class="general-container__form-add__item-form__btn-submit" type="submit">
                Crear
            </button>
        </div>

        </form>

    </div>

<!-- ----------------------------------- -->

    <div class="general-container__preview">

        <div class='product'>
			
            <div class='product-item-container'>

                <a class='link-container'>
                    <div class='img-container'>

                        <img id="view-image" src="../resources/static/img/default/default.png">

                    </div>
                </a>
                
                <div class='product-description-container'>
                    <div class='product-description'>

                        <span><b id="view-name">NOMBRE</b></span>

                        <span class="product__description-description" id="view-description"></span>

                        <span><b>Precio: $<b id="view-price">PRECIO</b></b></span>

                        <a class="link">
                            <div class='product-description-btn'>
                                <span>Agregar</span>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</main>

<script src="../resources/static/js/createProduct.js"></script>

</body>

</html>