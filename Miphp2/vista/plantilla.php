<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP</title>

<!--=====================================
	PLUGINS DE CSS
	======================================-->	

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!--=====================================
	PLUGINS DE JS
	======================================-->	

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<!-- Latest compiled Fontawesome-->
	<script src="https://kit.fontawesome.com/e632f1f723.js" crossorigin="anonymous"></script>

		</head>
		<body>

		<!--=====================================
		LOGOTIPO
		======================================-->	

<div class="container-fluid">
	 <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex w-full">

	 <img src="https://altruistas.org/wp-content/uploads/2020/03/Programacion-en-PHP-altruistas.jpg" width="50px" height="50px">

  <a class="navbar-brand" href="#">PHP</a>

			<ul class="nav nav-justified py-2 nav-pills">

			<?php if ($_GET["pagina"] == "inicio"): ?>
						
						<li class="nav-item">
							<a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
						</li>
		
					<?php else: ?>
		
						<li class="nav-item">
							<a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
						</li>
		
						<?php endif ?>
			<?php if (isset($_GET["pagina"])): ?>

				<?php if ($_GET["pagina"] == "registro"): ?>
						
				<li class="nav-item">
					<a class="nav-link" href="index.php?pagina=registro">Registro PC</a>
				</li>

			<?php else: ?>

				<li class="nav-item">
					<a class="nav-link" href="index.php?pagina=registro">registro PC</a>
				</li>

				<?php endif ?>
						<?php if ($_GET["pagina"] == "ingreso"): ?>
						
				<li class="nav-item">
					<a class="nav-link" href="index.php?pagina=ingreso">Login</a>
				</li>

			<?php else: ?>

				<li class="nav-item">
					<a class="nav-link" href="index.php?pagina=ingreso">Login</a>
				</li>

				<?php endif ?>
					<?php if ($_GET["pagina"] == "ingreso"): ?>
						
				<li class="nav-item">
					<a class="nav-link" href="index.php?pagina=salir">salir</a>
				</li>

			<?php else: ?>

				<li class="nav-item">
					<a class="nav-link" href="index.php?pagina=salir">Salir</a>
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
					<a class="nav-link" href="index.php?pagina=salir">Salir</a>
				</li>

			</ul>

					<?php endif ?>

		</div>
		
	</div>

<!--=====================================
	CONTENIDO
	======================================-->

	     <!-- GET: $_GET["variable"] Variables que se pasan como parámetros Vía URL ( También conocido como cadena de consulta a través de la URL) 
				Cuando es la primera variable se separa con ?
				las que siguen a continuación se separan con &
				-->

	<div class="container-fluid">
		
		<div class="container py-5">

			<?php 

			#ISSET: isset() Determina si una variable está definida y no es NULL

			if(isset($_GET["pagina"])){

			  if($_GET["pagina"] == "registro" ||
				$_GET["pagina"] == "ingreso" ||
				//actualizar
				$_GET["pagina"] == "actualizar" ||
				$_GET["pagina"] == "inicio" ||
				$_GET["pagina"] == "salir" ||
				$_GET["pagina"] == "registroUsuario"){

					include "pagina/".$_GET["pagina"].".php";

				}else{

					include "pagina/error404.php";
				}

			}else{

				include "pagina/registro.php";
			}


    ?>

</div>
</nav>
</div>

</body>
</html>


