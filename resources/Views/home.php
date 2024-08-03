<?php

use App\Models\Product;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="../resources/static/css/home.css">
</head>

<body>
    
    <h1>CARTA</h1>
    
    <div class="container">
        <img src="https://images.rappi.com.mx/restaurants_background/hamburguesas02-1679958895637.jpg" width="300px">
        <img src="https://images.rappi.com.mx/restaurants_background/hamburguesas02-1679958895637.jpg" width="300px">
        <img src="<?= $request["image_path"] ?>" width="100px">
    </div>
    
</body>
</html>