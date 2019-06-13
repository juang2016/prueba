<?php 


class ControladorVenta
{
	

	public $token;
	public $login;
     public $tranKey;

     public $sesion;

	static public function ctrRealizaPago(){

		if (isset($_POST["documento"]) && $_POST["documento"] !='') {

			//en este archivo se encuentra los datos para la autenticacion;

          require_once ( "vendor/dnetix/redirection/examples/bootstrap.php");


				// Creando una referencia aleatoria para la prueba.

			 // "nonce"=> "V21FeXZ1dDlHZ3ZjTVdyVg==",
					$reference =time();
                       //Información requerida

					$request = [					

					    "locale" => "es_CO",

					    "payer" => [
					        "name" => $_POST["nombre"],
					        "surname" => $_POST["apellido"],
					        "email" => $_POST["email"],
					        "documentType" => $_POST["tipodoc"],
					        "document" => $_POST["documento"],
					        "mobile" => $_POST["telefono"]
					    ],
					    "buyer" => [
					        "name" => $_POST["nombre"],
					        "surname" => $_POST["apellido"],
					        "email" => $_POST["email"],
					        "documentType" => $_POST["tipodoc"],
					        "document" => $_POST["documento"],
					        "mobile" => $_POST["telefono"]
					    ],
					    "payment" => [
					        "reference" => $reference,
					        "description" => "Testing Payment.",
					        "amount" => [
					            "currency" => $_POST["moneda"],
					            "total" => $_POST["tot"]
					        ],
					        "items" => [
					            [
					                "sku" => $_POST["produc"],
					                "name" => $_POST["descripcion"],
					                "qty" => $_POST["cantidad"],
					                "price" => $_POST["precio"],
					                "tax" => 1.19
					            ]
					        ],
					        "shipping" => [
					        "name" => $_POST["nombre"],
					        "surname" => $_POST["apellido"],
					        "email" => $_POST["email"],
					        "documentType" => $_POST["tipodoc"],
					        "document" => $_POST["documento"],
					        "mobile" => $_POST["telefono"]
					        ],
					        "allowPartial" => false
					    ],
					    "instrument"=> [
						 "token"=> [
						 "token"=> getenv('TOKEN')
						 ]
						],

					    "expiration" => date('c', strtotime('+1 hour')),
					    "ipAddress" => "181.142.220.50",
					    "userAgent" => "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36",
					    "returnUrl" => "http://localhost/prueba/index.php?ruta=respuesta"
					];



					try {

					    $placetopay = placetopay();
					    $response = $placetopay->request($request);

					    if ($response->isSuccessful()) {

					        // Se redirecciona el cliente ala pagina
                              $_SESSION["requestId"] =$response->requestId;

					        echo '<script>
                                 window.location = "'.$response->processUrl().'";

					        </script>';

                            
					        //var_dump($response->requestId);

					    } else {
					        // There was some error so check the message
					          
					         echo '<div class="alert alert-danger" role="alert" style ="font-size:16pt; margin-top:7px;">
				                 <strong>Error !</strong> '.$response->status()->message().'
				                </div>'	;
					    }
					    // var_dump($response);
					} catch (Exception $e) {
					    var_dump($e->getMessage());
					}

 
		}
		
		
	}

	static public function autenticacion($login, $tranKey){
       $this-> login = $login;
       $this-> tranKey =$tranKey;

	}

























}