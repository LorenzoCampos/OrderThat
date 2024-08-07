<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<h1>Modificar Producto</h1>

	<form method='post' action='../editProductRequest/<?= $request['id'] ?>' enctype='multipart/form-data'>

		<div class='form-modify_item'>
			<label for='image'>Imagen<span>*</span></label>
			<input class='image' type='file' name='image' required>
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
			<button type='submit'>Modificar Producto</button>
		</div>

	</form>



<!-- <form method="post" action="log_in.php">

    <div class="form-users_item email">
    
        <label for="email">Email<span>*</span></label>
        
        <input type="email" name="email" id="email" required>

    </div>

    <div class="form-users_item password">

        <label for="password">Password<span>*</span></label>

        <input type="password" name="password" id="password" value="" required>

    </div>

    <div class="form-users_submit">

        <button type="submit" name="submit">Sing Up</button>

    </div>

</form> -->

</body>

</html>