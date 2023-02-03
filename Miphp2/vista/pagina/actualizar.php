<?php

if (isset($_GET["id"])) {

//1 paso llamamos dos parametros

	$item = "id";//item me busque considencias en la columna id
	$valor = $_GET["id"];//que esa considencia sea igual a la que venga en la variable

	$computador = ControladorRegistro::ctrSelecionarRegistro($item, $valor);

	 // echo '<pre>'; print_r($usuario); echo '</pre>';

}

?>
<!--=====================================
	CONTENIDO
	======================================-->
	<h1 class="text-center tex-3x1">ACTUALIZAR COMPUTADOR</h1>
	
	<div class="d-flex justify-content-center text-center">

	<form class="p-5 bg-light" method="post">

		<div class="form-group">
			<label for="nombre">Nombre pc</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-user"></i>
					</span>
				</div>

				<input type="text" class="form-control" value="<?php echo $computador["nombre_pc"]; ?>"id="nombre_pc" name="ActualizarNombre_pc">

			</div>
			
		</div>

		<div class="form-group">

			<label for="modelo">Modelo</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>

				<input type="text" class="form-control" value="<?php echo $computador["modelo"]; ?>" id="modelo" name="ActualizarModelo">
			
			</div>
			
			<div class="form-group">

			<label for="precio">Precio</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>

				<input type="text" class="form-control" value="<?php echo $computador["precio"]; ?>" id="precio" name="ActualizarPrecio">
			
			</div>

		</div>

		<div class="form-group">
			<label for="color">Color</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-lock"></i>
					</span>
				</div>

				<input type="text" class="form-control" value="<?php echo $computador["color"]; ?>" id="color" name="ActualizarColor">

				<input type="hidden" name="ModeloActual" value="<?php echo $computador["modelo"]; ?>">
				<input type="hidden" name="id" value="<?php echo $computador["id"]; ?>">

			</div>

			</div>
			
			<?php

		/*=============================================
		FORMA EN QUE SE INSTANCIA LA CLASE DE UN MÉTODO ESTÁTICO 
		=============================================*/

		$Acualizar = ControladorRegistro::ctrActualizar();

		if ($Acualizar == "ok") {

			echo '<script>

				if ( window.history.replaceState ) {

					window.history.replaceState( null, null, window.location.href );

				}

			</script>';

			echo '<div class="alert alert-success">El computador ha sido actualizado</div>

			<script>

               setTimeout(function(){

               	window.location = "index.php?pagina=inicio";

               },3000);

		   </script>';
			
		}

    ?>  

		      <button type="submit" class="btn btn-primary">Actualizar</button>

		  </form>

	</div>