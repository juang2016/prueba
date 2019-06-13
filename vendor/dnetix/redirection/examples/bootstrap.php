<?php

/**
 * The only purpose for this file its bootstrap the classes and generate a single point
 * to instanciate the PlacetoPay class
 */
require_once 'vendor/autoload.php';

use Dnetix\Redirection\PlacetoPay;

/**
 * Instanciates the PlacetoPay object providing the login and tranKey, also the url that will be
 * used for the service
 * @return PlacetoPay
 */


function placetopay()
{

	// date_default_timezone_set('America/Bogota');

	if (function_exists('random_bytes')) {
				    $nonce = bin2hex(random_bytes(16));
				} elseif (function_exists('openssl_random_pseudo_bytes')) {
				    $nonce = bin2hex(openssl_random_pseudo_bytes(16));
				} else {
				    $nonce = mt_rand();
				}

				$nonceer = base64_encode($nonce);
			    $secretKey = getenv('SECRETKEY');
                $seed = date('c');
                $tranKey = base64_encode(sha1($nonce.$seed.$secretKey, true));

               

    return new PlacetoPay([
        "login" => getenv('TOKEN'),
        "seed" => $seed,
        "nonce" => $nonce,
        "tranKey" =>  $secretKey,
        "url" => getenv('URL')
        // 'type' => getenv('P2P_TYPE') ?: PlacetoPay::TP_REST
    ]);
}