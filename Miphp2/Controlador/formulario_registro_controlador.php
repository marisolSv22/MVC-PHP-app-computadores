<?php 

class ControladorRegistro{

    /*=============================================
	Registro
	=============================================*/


	static public function ctrtrarRegistro(){


		if(isset ($_POST["registroNombre_pc"])){
          
          $tabla = "computador";

          $datos = array("nombre_pc" => $_POST["registroNombre_pc"],
			          	"modelo" => $_POST["registroModelo"],
			          	"precio" => $_POST["registroPrecio"],
			          	"color" => $_POST["registroColor"]);

          $respuesta = ModeloRegistro::mdleloRegistro($tabla,$datos);

          return $respuesta;

       }
      }

          static public function ctrRegistro(){

    			if(isset ($_POST["registroNombre"])){
          
          $tabla = "usuario";

          $datos = array("nombre" => $_POST["registroNombre"],
			          	"correo" => $_POST["registroCorreo"],
			          	"password" => $_POST["registroPassword"]);

          $respuesta = ModeloRegistro::mdlRegistro($tabla,$datos);

          return $respuesta;

		}

	}

	/*=============================================
	Seleccionar Registros
	=============================================*/

	static public function ctrSelecionarRegistro($item, $valor){

		$tabla = "computador";

		$respuesta = ModeloRegistro::mdlselecionarregristro($tabla, $item, $valor);

		return $respuesta;

	}


    /*=============================================
	Validar el Registro
	=============================================*/



   	/*=============================================
	Ingreso
	=============================================*/

	public function ctrIngreso(){

		if(isset($_POST["ingresoEmail"])){

			$tabla = "usuario";
			$item = "correo";
			$valor = $_POST["ingresoEmail"];

			$respuesta = ModeloRegistro::mdlselecionarregristro($tabla, $item, $valor);

			if($respuesta["correo"] == $_POST["ingresoEmail"] && $respuesta["password"] == $_POST["ingresoPassword"]){

				$_SESSION["validarIngreso"] = "ok";

				echo '<script>

					if ( window.history.replaceState ) {

						window.history.replaceState( null, null, window.location.href );

					}

					window.location = "index.php?pagina=inicio";

				</script>';

			}else{

				echo '<script>

					if ( window.history.replaceState ) {

						window.history.replaceState( null, null, window.location.href );

					}

				</script>';

				echo '<div class="alert alert-danger">Error al ingresar al sistema, el email o la contraseña no coinciden</div>';
			}
			
		}

	}

    /*=============================================
	Actualizar Registro
	=============================================*/


	static public function ctrActualizar(){

        if(isset ($_POST["ActualizarNombre_pc"])){

        	if($_POST["ActualizarModelo"]!= ""){

        		$modelo = $_POST["ModeloActual"];
        		
        		}else{

        		$modelo = $_POST["ModeloActual"];

        		}

          $tabla = "computador";

          $datos = array("id" => $_POST["id"],
                  "nombre_pc" => $_POST["ActualizarNombre_pc"],
			          	"modelo" => $_POST["ActualizarModelo"],
			          	"precio" => $_POST["ActualizarPrecio"],
			          	"color" => $_POST["ActualizarColor"]);

          $respuesta = ModeloRegistro::mdleloActualizar($tabla,$datos);

          return $respuesta;

		}

	}

    /*=============================================
	Eliminar  Registro
	=============================================*/

	static public function ctrEliminar(){

        if(isset ($_POST["EliminarRegistro"])){

        	$tabla = "computador";
          $valor = $_POST["EliminarRegistro"];

      $respuesta = ModeloRegistro::mdleloeliminar($tabla,$valor);

      if($respuesta == "ok"){

			echo '<script>

				if ( window.history.replaceState ) {

					window.history.replaceState( null, null, window.location.href );

				}

		   	window.location = "index.php?pagina=inicio";

               },3000);

		   </script>';

		}
	}

  }

}