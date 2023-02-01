<?php

	 class Conexion{
	
	static public function conectar(){

#PDO(nombre de mi servidor : nombre de mi base de datos, nombre del usuario, contraseña)

     $link = new PDO("mysql:host=localhost;dbname=crudphp",
                      "root",
                      "");

     //$link->exec("set name utf8");

                 return $link;

	 }	

	}
?>