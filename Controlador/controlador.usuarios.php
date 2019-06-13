<?php 

class ControladorUsuarios
{


static public function ctrIngresoUsuario(){

	if (isset($_POST["usuariologin"])) {
		
   				$encriptar = crypt($_POST["contrasenalogin"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

				$tabla = "Usuarios";

				$columna = "Usuario";

				$valor = $_POST["usuariologin"];

         if (Conexion::conectar()) {
          
				$respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $columna, $valor);
				

					if ($respuesta["Usuario"] == $_POST["usuariologin"] && $respuesta["Contrasena"] == $encriptar ) {

						if ($respuesta["Estado"] == "1") {

						    $_SESSION["iniciarSesion"] = "ok";

						    $_SESSION["nombre"] = $respuesta["NombreUsuario"];
               				 $_SESSION["usuario"] = $respuesta["Usuario"];

                            // =============================================
                            //       =   Actualiza fecha ultimo ingreso     =
                            // =============================================

                             echo '<script>

                                window.location = "venta";

                                </script>';
                               // session_destroy();
                           
						}else{

			              echo '<script>

			                        swal({
			                              title: "El usuario esta inactivo",
			                              icon: "error",
			                              buttons: "Cerrar"
			                            })
			                    </script>';

			            }
				}else{

          echo '<div class="alert alert-danger" role="alert" style ="font-size:16pt;">
                 <strong>Error !</strong> Usuario y contraseña incorrectos.
                </div>';
        }
	} 
	
}	
}	
}