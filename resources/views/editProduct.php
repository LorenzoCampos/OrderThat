<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>

<body>

<h1>Modificar Producto</h1>

	<form method='post' action='../editProductRequest/<?= $request['id'] ?>' enctype='multipart/form-data'>

		<div class='form-modify_item'>
			<label for='image'>Imagen<span>*</span></label>
			<input class='image' type='file' name='image'>
		</div>

		<div class='form-modify_item'>
			<label>Descripcion<span>*</span></label>
			<input type='text' name='description' value='<?= $request['description'] ?>' required>
		</div>

		<div class='form-modify_item'>
			<label for='price'>Precio<span>*</span></label>
			<input type='number' step='0.01' name='price' value='<?= $request['price'] ?>' required>
		</div>

		<div class='form-modify_item'>
			<label for='stock'>stock<span>*</span></label>
			<input type='number' name='stock' value='<?= $request['stock'] ?>' required>
		</div>

		<div class='form-modify_submit'>
			<input type='submit' value="Modificar Producto" id="buttonEditProduct">
		</div>

	</form>


	<form action="../editProductIngredients/<?= $request['id'] ?>">

		<?php
			foreach ($request['ingredients'] as $ingredient) {}
		?>
			<div class='form-modify_item'>
				<label for='ingredient'>Ingrediente<span>*</span></label>
				<input type='text' name='ingredient' value='<?= $ingredient ?>'>
			</div>


		<div class='form-modify_item'>
			<label for='ingredients'>Ingredientes<span>*</span></label>
			<input type='text' name='ingredients' value='<?= $request['ingredients'] ?>' required>

		<input type="submit" value="Añadir ingredientes">

	</form>
</body>

</html>