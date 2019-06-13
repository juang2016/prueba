<?php 


/**
 * 
 */
class ModeloProductos
{
	
	static public function mdlMostrarProducto($tabla1 ,$valor){

		if ($valor != null) {
			 $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla1 WHERE Referencia =:refrencia");
			 $stmt->bindParam(":refrencia", $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		} else {
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla1");

			$stmt -> execute();

			return $stmt -> fetchAll();

			
		}
		
           $stmt -> close();

           $stmt = null;
		
	}
}