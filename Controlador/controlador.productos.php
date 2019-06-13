<?php 
/**
 * 
 */
class ControladorProductos
{
	static public function ctrTreProdustcos($valor){

      $tabla1  ="productos";
  
       $traeproductos = ModeloProductos::mdlMostrarProducto($tabla1,$valor);
       return  $traeproductos; 

	}
	 
}