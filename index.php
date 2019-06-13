<?php
 /*=============================================
      =            CONTROLADOR            =
  =============================================*/
 
 require_once("Controlador/controlador.plantilla.php");
  require_once("Controlador/controlador.usuarios.php");
  require_once("Controlador/controlador.venta.php");
  require_once("Controlador/controlador.productos.php");
  require_once("Controlador/controlador.respuesta.php");

/*=============================================
      =            MODELO           =
  =============================================*/

  require_once ("Modelo/Modelo.usuarios.php");
  require_once ("Modelo/conexion.php");
  require_once ("Modelo/Modelo.compra.php");
  require_once ("Modelo/Modelo.productos.php");
  require('vendor/autoload.php');



  $dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();
  


 $platilla = new ControladorPlantilla();
 $platilla ->crtPlantilla();
