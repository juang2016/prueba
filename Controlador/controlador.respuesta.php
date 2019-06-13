<?php

 require_once ( "vendor/dnetix/redirection/examples/bootstrap.php");



class ControladorRespuesta
{
	
	static public function ctrValidaEstadoPago($requestId){

		if ($requestId != '') {
			
	
       try {
			    $response = placetopay()->query($requestId);

			    if ($response->isSuccessful()) {

			        if ($response->status()->isApproved()) {
			            // El pago ha sido aprobado.
			             $resultado = $requestId . " PAYMENT APPROVED";
			              return $resultado;
			            //Esta es información adicional al respecto.
			             // print_r($response->toArray());

			        } else {
			             $resultado = ($requestId . ' ' . $response->status()->message() );

			             return $resultado;
			        }

			    } else {
			        // Hubo algún error con la conexión así que revisa el mensaje.
			        print_r($response->status()->message() . "\n");

			        return $response->status()->message();

			    }
			} catch (Exception $e) {
			    var_dump($e->getMessage());
			}
			 session_destroy(); 

		}

	} 

}