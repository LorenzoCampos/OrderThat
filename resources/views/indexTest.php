<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TEST</title>
  <link rel="stylesheet" href="../resources/static/css/dropdownMenu.css">
  <link rel="stylesheet" href="../resources/static/css/popupMenu.css">
  <link rel="stylesheet" href="../resources/static/css/test.css">

</head>
<body>

  <style>
    body{
      display: grid;
      place-content: center;
      background-color: #222;
    }

    h1{
      color: #fff;
    }
  </style>

    <h1>Hola mundo</h1>

    <button id="openPopup" onclick="delete(id)"> Eliminar </button>

    <div class="overlay" id="confirmOverlay">
      <div class="confirm-box">
        <h3>Estas Seguro??</h3>
        <p>No seas taradito</p>
        <button class="confirm-button" id="confirmButton">Borrar</button>
        <button class="cancel-button" id="cancelButton">Cancelar</button>
      </div>
    </div>

  
  <script src="../resources/static/js/popupAlert.js"></script>

</body>
</html>