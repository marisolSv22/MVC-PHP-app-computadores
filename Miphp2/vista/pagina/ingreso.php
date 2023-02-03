<h1 class="text-center text-3x1">LOGIN</h1>

<div class="d-flex justify-content-center text-center">

	<form class="p-5 bg-light" method="post">

		<div class="form-group">

			<label for="email">Correo electrónico</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>

				<input type="email" class="form-control" id="correo" name="ingresoEmail">
			
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

				<input type="password" class="form-control" id="pwd" name="ingresoPassword">

			</div>

		</div>

		<?php 

		   //la petición al controlador 

		$ingreso = new ControladorRegistro();
		$ingreso -> ctrIngreso();

		?>
		
		<button type="submit" class="btn btn-primary">Ingresar</button>

		<div class="mt-3">
			<li class="nav nav-link">
				<a href="index.php?pagina=registroUsuario">¿Deseas registrarte?</a>
			</li>
		</div>

	</form>

</div>