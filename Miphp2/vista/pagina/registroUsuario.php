<!--=====================================
	CONTENIDO
	======================================-->
	<h1 class="text-center text-3x1">REGISTRO USUARIO</h1>
	
	<div class="d-flex justify-content-center text-center">

	<form class="p-5 bg-light" method="post">

		<div class="form-group">
			<label for="nombre">Nombre</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-user"></i>
					</span>
				</div>

				<input type="text" class="form-control" id="nombre" name="registroNombre">

			</div>
			
		</div>

		<div class="form-group">

			<label for="email">Correo</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>

				<input type="email" class="form-control" id="correo" name="registroCorreo">
			
			</div>
			
		</div>

		<div class="form-group">
			<label for="pwd">Contraseña</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-lock"></i>
					</span>
				</div>

				<input type="password" class="form-control" id="pwd" name="registroPassword">

			</div>

			</div>
			
			<?php

		/*=============================================
		FORMA EN QUE SE INSTANCIA LA CLASE DE UN MÉTODO ESTÁTICO 
		=============================================*/

		   //la petición al controlador 


		$registro = ControladoRegistro::ctrRegistro();

		if ($registro == "ok") {


			echo '<script>

				if ( window.history.replaceState ) {

					window.history.replaceState( null, null, window.location.href );

				}

			</script>';

			echo '<div class="alert alert-success">El usuario ha sido registrado</div>';
			
		}

    ?>  

		      <button type="submit" class="btn btn-primary">Guardar</button>

		  </form>

	</div>