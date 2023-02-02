<!--=====================================
	CONTENIDO
	======================================-->
	<h1 class="text-center text-3x1">REGISTRO PC</h1>
	
	<div class="d-flex justify-content-center text-center">

	<form class="p-5 bg-light" method="post">

		<div class="form-group">
			<label for="nombre">Nombre pc</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-laptop"></i>
					</span>
				</div>

				<input type="text" class="form-control" id="nombre_pc" name="registroNombre_pc">

			</div>
			
		</div>

		<div class="form-group">

			<label for="email">Modelo</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-desktop"></i>
					</span>
				</div>

				<input type="text" class="form-control" id="modelo" name="registroModelo">
			
			</div>
			
		</div>

		<div class="form-group">
			<label for="pwd">Precio</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-money-bill"></i>
					</span>
				</div>

				<input type="text" class="form-control" id="precio" name="registroPrecio">

			</div>

			</div>
			
			<div class="form-group">
			<label for="pwd">Color</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-paint-brush"></i>
					</span>
				</div>

				<input type="text" class="form-control" id="color" name="registroColor">

			</div>

			</div>

			<?php

		/*=============================================
		FORMA EN QUE SE INSTANCIA LA CLASE DE UN MÉTODO ESTÁTICO 
		=============================================*/

		   //la petición al controlador 


		$registro = ControladoRegistro::ctrtrarRegistro();

		if ($registro == "ok") {


			echo '<script>

				if ( window.history.replaceState ) {

					window.history.replaceState( null, null, window.location.href );

				}

			</script>';

			echo '<div class="alert alert-success">El computador ha sido registrado</div>';
			
		}

    ?>  
	     
		      <button type="submit" class="btn btn-primary">Guardar</button>

		  </form>

	</div>