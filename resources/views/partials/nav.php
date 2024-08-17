<nav>
	<div class="nav-container">
		<div class="nav-item">
			<a href="../public"><img src="../resources/static/img/Logo/rub-white.png"></a>
			<input type="checkbox" class="theme-checkbox" id="darkMode">
		</div>

		<?php
		if (isset($_SESSION['id_user'])) {
		?>

			<div class="nav-item-user">
				<div class="nav-item">
					<a href="../public/cart"><b>Carrito</b></a>
					<a href="../public/myAccount"><b>Mi Cuenta</b></a>
				</div>

				<div class="nav-item">
					<a href="../public/logout"><b>Cerrar Sesión</b></a>
				</div>
			</div>

		<?php
		} else {
		?>
			<div class="nav-item">
				<a href="../public/login"><b>Iniciar Sesión</b></a>
			</div>
			
		<?php
		}
		?>
	</div>
</nav>