<nav>
		<?php
		if (isset($_SESSION['id_user'])) {
		?>

    <div class="nav-container">

      <div class="nav-item"></div>

        <div class="user-container">
          
          <div class="user-container__button">
            <img src="../resources/static/img/default/menu.png">

            <div class="button-dropdown">
              <a href="../public/"><b>Inicio</b></a>
              <a href="../public/myAccount"><b>Cuenta</b></a>
              <a href="../public/myAddress"><b>Direcciones</b></a>
              <a href="../public/myPaymentMethods"><b>Metodos de pago</b></a>
              <a href="../public/myRecentOrders"><b>Historial de pedidos</b></a>
              <p>Sesión</p>
              <a href="../public/logout"><b>Cerrar Sesión</b></a>
            </div>

          </div>
        </div>

        <div class="nav-item">
          <img class="nav-item__img" src="../resources/static/img/default/carrito.png" href="../">
        </div>

      </div>

    </div>

    <?php
		} else {
		?>
    <div class="nav-container">
      <div class="nav-item ">
        <div class="user-container">
          
          <div class="user-container__button">
            <img src="../resources/static/img/default/menu.png">

            <div class="button-dropdown">
              <a href="../public/login"><b>Iniciar Sesión</b></a>
            </div>  
      </div>
    </div>

		<?php
		}
		?>
	  </div>
</nav>

<script src="../resources/static/js/nav.js"></script>