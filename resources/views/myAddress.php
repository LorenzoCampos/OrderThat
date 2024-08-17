<?php

include "partials/initSession.php";

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mis Direcciones</title>
  <link rel="icon" href="../resources/static/img/Logo/rub-white.png">
  <link rel="stylesheet" href="../resources/static/css/main.css">
  <link rel="stylesheet" href="../resources/static/css/address.css">
</head>

<?php

include "partials/nav.php";

include "partials/subNav.php";

?>

<body>

<main class="main-address">

<div class="title-container">
	<h1 class="title-container__text">
    Mis Direcciones
	</h1>
</div>

<div class="addresses-container">

<?php

  if (isset($result)) {
    foreach ($result as $key => $value) {

?>

	<div class="addresses-container__address">

    <h3 class="addresses-container__address__text">
      <?= $value['street'] ?> <?= $value['number'] ?>
    </h3>

    <div class="addresses-container__address__info">

      <h4 class="addresses-container__address__info__text">
        <?= $value['locality'] ?>
      </h4>

    </div>

	</div>

<?php

    }
  }

?>

  <div class="addresses-container__add-address">

    <a href="../public/newAddress">

        <h3 class="addresses-container__add-address__button__text">
          <b>Agregar Direccion</b>
        </h3>

    </a>

  </div>

</div>

</main>

</body>

<script src="../resources/static/js/alerts.js"></script>

</html>