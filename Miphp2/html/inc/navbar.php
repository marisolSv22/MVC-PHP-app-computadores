<div class="container-fluid">
	 <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex w-full">
	<link rel="stylesheet" href="html/css/style.css">

	 <img src="https://altruistas.org/wp-content/uploads/2020/03/Programacion-en-PHP-altruistas.jpg" width="50px" height="50px">

  <a class="navbar-brand d-flex" href="#">PHP</a>

			<ul class="nav nav-justified py-2 nav-pills w-full mx-4 my-2 w-full">
			<?php if ($_GET["pagina"] == "inicio"): ?>
						
						<li class="navbar-item">
							<a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
						</li>
		
					<?php else: ?>
		
						<li class="navbar-item">
							<a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
						</li>
		
						<?php endif ?>
			<?php if (isset($_GET["pagina"])): ?>

				<?php if ($_GET["pagina"] == "registro"): ?>
						
				<li class="navbar-item">
					<a class="nav-link" href="index.php?pagina=registro">Registro PC</a>
				</li>

			<?php else: ?>

				<li class="navbar-item">
					<a class="nav-link" href="index.php?pagina=registro">Registro PC</a>
				</li>

				<?php endif ?>
			<?php if ($_GET["pagina"] == "ingreso"): ?>
						
				<li class="navbar-item">
					<a class="nav-link" href="index.php?pagina=ingreso">Login</a>
				</li>

			<?php else: ?>

				<li class="navbar-item">
					<a class="nav-link" href="index.php?pagina=ingreso">Login</a>
				</li>

				<?php endif ?>
					<?php if ($_GET["pagina"] == "salir"): ?>
						
				<li class="navbar-item">
					<a class="nav-link" href="index.php?pagina=salir">Log out</a>
				</li>

			<?php else: ?>

				<li class="navbar-item">
					<a class="nav-link" href="index.php?pagina=salir">Log out</a>
				</li>

				<?php endif ?>
				
			<?php else: ?>

			<ul class="nav nav-justified py-2 nav-pills">

				<li class="nav-item">
					<a class="nav-link" href="index.php?pagina=registro">Registro PC</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="index.php?pagina=salir">Log out</a>
				</li>

			</ul>

					<?php endif ?>

		</div>
		
	</div>