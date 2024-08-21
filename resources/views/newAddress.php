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
    Nueva Dirección
	</h1>
</div>

<div class="form-container">

  <form class="form-container__form" action="../public/newAddressRequest" method="post">

    <div class="form-container__form__separator">

      <div class="form-container__form__separator__input">
        <label for="locality">Localidad<span>*</span></label>
        <input type="text" name="locality" required>
      </div>

      <div class="form-container__form__separator__input">
        <label for="street">Calle/Avenida<span>*</span></label>
        <input type="text" name="street" required>
      </div>

    </div>

    <div class="form-container__form__separator">
    
      <div class="form-container__form__separator__input">
        <label for="floor">Piso/Departamento (opcional)</label>
        <input type="text" name="floor">
      </div>

      <div class="form-container__form__separator__input">
        <label for="number">Numero<span>*</span></label>
        <input type="number" name="number" required>
      </div>

    </div>

    <div class="form-container__form__separator">

      <div class="form-container__form__separator__input">
        <label for="street1">Calle 1</label>
        <input type="text" name="street1">
      </div>

      <div class="form-container__form__separator__input">
        <label for="street2">Calle 2</label>
        <input type="text" name="street2">
      </div>

    </div>

    <div class="form-container__form__separator">
      <button class="form-container__form__separator__button" type="submit">
        Agregar
      </button>
    </div>

  </form>

</div>

</main>

</body>

</html>