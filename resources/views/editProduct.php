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
	<link rel="stylesheet" href="../resources/static/css/editProduct.css">
</head>

<?php

include "partials/nav.php";

?>

<body>

<main class="main-edit-product">

<div class="title-container">
	<h1 class="title-container__text">
    Modificar Producto
	</h1>
</div>

<form class="edit-product-form" method='post' action='../public/editProductRequest<?= $request["id"] ?>' enctype='multipart/form-data'>

	<div class="edit-product-form__main">

		<div class="edit-product-form__main__image-form">
			<div class="edit-product-form__main__image-form__image-container">
				<img id="preview-image" src="<?= $request['image_path'] ?>" alt="imagen del producto">
			</div>
			<input type="file" name="image" id="image" hidden required>
			<label for="image">Cambiar foto</label>
		</div>

		<div class="edit-product-form__main__item-form">
			<label for="name">Nombre del Producto</label>
			<input type="text" name="name" id="name" value="<?= $request['name'] ?>" required>
		</div>

		<div class="edit-product-form__main__pl">

			<div class="edit-product-form__main__item-form">
				<label for="price">Precio</label>
				<input type="number" step="0.01" name="price" id="price" value="<?= $request['price'] ?>" required>
			</div>

			<div class="edit-product-form__main__item-form">
				<label for="stock">Stock</label>
				<input type="number" name="stock" id="stock" value="<?= $request['stock'] ?>" required>
			</div>

		</div>

		<div class="edit-product-form__main__item-form">
			<label for="description">Descripcion</label>
			<input type="text" name="description" id="description" value="<?= $request['description'] ?>" required>
		</div>

		<div class="edit-product-form__main__item-form">
			<button class="edit-product-form__main__item-form__btn-submit" type="submit">
				Modificar
			</button>
		</div>

	</div>

<!-- ---------------------------------------------------------- -->

	<div class="edit-product-form__ingredients">

        <div id="div-ingredient" class="edit-product-form__ingredients__ingredient-container">
		<?php

        if ($request["ingredients"]){

			foreach ($request["ingredients"] as $key => $value) {

		?>	

		<div class="edit-product-form__ingredients__ingredient-container__item-form">
			<label for="input-ingredient">Ingrediente</label>
			<input type="text" id="input-ingredient" name="ingredient-<?= $value['id'] ?>" value="<?= $value['ingredient'] ?>" required">
		</div>

        <?php
			}
        }
        ?>
        </div>

		<div class="edit-product-form__ingredients__add-button">

			<button class="edit-product-form__ingredients__add-button__btn" id="add-input">Agregar Ingredientete</button>

		</div>

	</div>

</form>

</main>

<script src="../resources/static/js/editProduct.js"></script>

</body>

</html>