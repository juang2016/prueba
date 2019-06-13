// Creando una referencia aleatoria para la prueba.
					$reference = 'TEST_' . time();
                       //Información requerida
					$request = [
					    "locale" => "es_CO",
					    "payer" => [
					        "name" => "Kellie Gerhold",
					        "surname" => "Yost",
					        "email" => "flowe@anderson.com",
					        "documentType" => "CC",
					        "document" => "1848839248",
					        "mobile" => "3006108300",
					        "address" => [
					            "street" => "703 Dicki Island Apt. 609",
					            "city" => "North Randallstad",
					            "state" => "Antioquia",
					            "postalCode" => "46292",
					            "country" => "US",
					            "phone" => "363-547-1441 x383"
					        ]
					    ],
					    "buyer" => [
					        "name" => "Kellie Gerhold",
					        "surname" => "Yost",
					        "email" => "flowe@anderson.com",
					        "documentType" => "CC",
					        "document" => "1848839248",
					        "mobile" => "3006108300",
					        "address" => [
					            "street" => "703 Dicki Island Apt. 609",
					            "city" => "North Randallstad",
					            "state" => "Antioquia",
					            "postalCode" => "46292",
					            "country" => "US",
					            "phone" => "363-547-1441 x383"
					        ]
					    ],
					    "payment" => [
					        "reference" => $reference,
					        "description" => "Iusto sit et voluptatem.",
					        "amount" => [
					            "currency" => "USD",
					            "total" => 1076.3
					        ],
					        "items" => [
					            [
					                "sku" => 26443,
					                "name" => "Qui voluptatem excepturi.",
					                "category" => "physical",
					                "qty" => 1,
					                "price" => 940,
					                "tax" => 89.3
					            ]
					        ],
					        "shipping" => [
					            "name" => "Kellie Gerhold",
					            "surname" => "Yost",
					            "email" => "flowe@anderson.com",
					            "documentType" => "CC",
					            "document" => "1848839248",
					            "mobile" => "3006108300",
					            "address" => [
					                "street" => "703 Dicki Island Apt. 609",
					                "city" => "North Randallstad",
					                "state" => "Antioquia",
					                "postalCode" => "46292",
					                "country" => "US",
					                "phone" => "363-547-1441 x383"
					            ]
					        ],
					        "allowPartial" => false
					    ],
					    "expiration" => date('c', strtotime('+1 hour')),
					    "ipAddress" => "127.0.0.1",
					    "userAgent" => "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.86 Safari/537.36",
					    "returnUrl" => "localhost/respuesta"
					];
					try {
					    $placetopay = placetopay();
					    $response = $placetopay->request($request);
					    if ($response->isSuccessful()) {
					        // Redirect the client to the processUrl or display it on the JS extension
					        // $response->processUrl();
					    } else {
					        // There was some error so check the message
					        // $response->status()->message();
					    }
					    var_dump($response);
					} catch (Exception $e) {
					    var_dump($e->getMessage());
					}