
<?php


require_once "../Controlador/controlador.productos.php";
require_once "../Modelo/Modelo.productos.php";
require_once "../Modelo/conexion.php";

 class AjaxProductos
 {

 public $refe; 

 	
 	public function TraeProductosIndividual(){

		$refe =$this->refe;

		$respuesta = ControladorProductos::ctrTreProdustcos($refe);

	  echo json_encode($respuesta);

 	}
 } 

 if (isset($_POST["referencia"])) {
 	
  $resultado = new AjaxProductos();
   $resultado-> refe = $_POST["referencia"];
  $resultado-> TraeProductosIndividual();
 } 
