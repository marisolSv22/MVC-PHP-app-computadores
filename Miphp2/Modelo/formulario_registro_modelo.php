<?php

require_once "conexion.php";


class ModeloRegistro{

	static public function mdleloRegistro($tabla, $datos){

		#statement: declaración

		#prepare() Prepara una sentencia SQL para ser ejecutada por el método PDOStatement::execute().
		#La sentencia SQL puede contener cero o más marcadores de parámetros con nombre (:name) o signos 
		#de interrogación (?) por los cuales los valores reales serán sustituidos cuando la sentencia sea ejecutada. 
		#Ayuda a prevenir inyecciones SQL eliminando la necesidad de entrecomillar manualmente los parámetros.

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre_pc, modelo, precio, color) VALUES (:nombre_pc, 
		:modelo,  :precio, :color)");

		#bindParam() Vincula una variable de PHP a un parámetro de sustitución con nombre o de signo de interrogación 
		#correspondiente de la sentencia SQL que fue usada para preparar la sentencia.
        $stmt->bindParam(":nombre_pc", $datos["nombre_pc"], PDO::PARAM_STR); 
		$stmt->bindParam(":modelo", $datos["modelo"],PDO::PARAM_STR);
		$stmt->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
		$stmt->bindParam(":color", $datos["color"], PDO::PARAM_STR);

		if ($stmt->execute()) {
			
			return "ok";
		}else{

			print_r(Conexion::conectar()->errorInfo());
		}

		$stmt->close();

		$stmt = null;

	}

		static public function mdlRegistro($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, correo, password) VALUES (:nombre, :correo,
	      :password)");

		#bindParam() Vincula una variable de PHP a un parámetro de sustitución con nombre o de signo de interrogación correspondiente de la sentencia SQL que fue usada para preparar la sentencia.

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR); 
		$stmt->bindParam(":correo", $datos["correo"],PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);


		if ($stmt->execute()) {
			
			return "ok";
		}else{

			print_r(Conexion::conectar()->errorInfo());
		}

		$stmt-> close();

		$stmt = null;

		}

	/*=============================================
	Seleccionar Registros
	=============================================*/

	static public function mdlselecionarregristro($tabla, $item, $valor){

		if($item == null && $valor == null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id DESC");

			$stmt->execute();

			return $stmt -> fetchAll();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY id DESC");

			$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt->execute();

			return $stmt -> fetch();
		}

		$stmt->close();

		$stmt = null;	

	}

    /*=============================================
	Actualizar registro
	=============================================*/

		static public function mdleloActualizar($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE  $tabla  SET nombre_pc=:nombre_pc, modelo=:modelo, precio=:precio,
		color=:color WHERE id = :id");

        $stmt->bindParam(":nombre_pc", $datos["nombre_pc"], PDO::PARAM_STR); 
		$stmt->bindParam(":modelo", $datos["modelo"],PDO::PARAM_STR);
		$stmt->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
		$stmt->bindParam(":color", $datos["color"], PDO::PARAM_STR);
		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

		if ($stmt->execute()) {
			
			return "ok";
		}else{

			print_r(Conexion::conectar()->errorInfo());
		}

		$stmt->close();

		$stmt = null;

	}
	 /*=============================================
	Eliminar Registro
	=============================================*/

		static public function mdleloelimiar($tabla, $valor){

		$stmt = Conexion::conectar()->prepare(" DELETE FROM $tabla  WHERE id = :id");

		$stmt->bindParam(":id", $valor, PDO::PARAM_STR);

		if ($stmt->execute()) {
			
			return "ok";
		}else{

			print_r(Conexion::conectar()->errorInfo());
		}

		$stmt->close();

		$stmt = null;

	}
}