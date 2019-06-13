<?php 


class ModeloUsuarios
{
	
	function MdlMostrarUsuarios($tabla, $columna, $valor)
	{
		if (Conexion::conectar()) {
	
		
		if($columna != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $columna = :$columna");

			$stmt -> bindParam(":".$columna, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();
 
		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla INNER JOIN perfiles ON $tabla.perfile = perfiles.idPerfile");  

			$stmt -> execute();

			return $stmt -> fetchAll();

		}
		

		$stmt -> close();

		$stmt = null;

	}
	}
	}