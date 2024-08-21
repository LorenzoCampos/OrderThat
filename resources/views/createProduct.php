

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>

<body>

<h1>Create Product</h1>

<form method='post' action='../public/createProductRequest' enctype='multipart/form-data'>
    <div class='form-modify_item'>
        <label for='image'>Imagen<span>*</span></label>
        <input class='image' type='file' name='image' required>
    </div>

    <div class='form-modify_item'>
        <label for='description'>Descripcion<span>*</span></label>
        <input type='text' name='description' required>
    </div>

    <div class='form-modify_item'>
        <label for='price'>Precio<span>*</span></label>
        <input type='number' step='0.01' name='price' required>
    </div>

    <div class='form-modify_item'>
        <label for='stock'>stock<span>*</span></label>
        <input type='number' name='stock' required>
    </div>

    <div class='form-modify_submit'>
        <button type='submit'>Crear Producto</button>
    </div>

</form>

<script src="../resources/static/js/productAlerts.js"></script>

</body>

</html>