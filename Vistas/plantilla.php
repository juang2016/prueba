<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Pago en linea</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="Vistas/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Vistas/css/bootstrapValidator.min.css">
    
   

</head>
<body style="background-color: silver">
	<?php 
  if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {

  	   if(isset($_GET["ruta"])){

                     if($_GET["ruta"] == "Login" ||
                        $_GET["ruta"] == "respuesta" ||
                        $_GET["ruta"] == "venta"){

                          include $_GET["ruta"].".php"; 

                      }
                  }
  } else {

   include "Login.php";
  }
  
	 ?>
 

 <script type="text/javascript" src="Vistas/js/jquery.min.js"></script>
 <script type="text/javascript" src="Vistas/js/bootstrap.min.js"></script>
<script type="text/javascript" src="Vistas/js/bootstrapValidator.min.js"></script>
 <script type="text/javascript" src="Vistas/js/sweetalert.min.js"></script>
<script type="text/javascript" src="Vistas/js/prueba.js"></script>

</body>



</html>