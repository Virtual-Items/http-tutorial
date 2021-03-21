<?php

// GETTING REQUEST HEADERS
$req_headers = getallheaders();

// GETTING THE ACCEPT-LANGUAGE HEADER (IF NOT EXISTS IT ASSUMES IS ENGLISH)
$AcceptLanguage =
    empty($req_headers['Accept-Language']) ?
    'en-US' : $req_headers['Accept-Language'];

// DETERMINE WHAT THE CLIENT EXPECTS
switch ($AcceptLanguage) {

    // SPANISH
    case 'es-CO':
        echo json_encode(array( 'data' => 'hola mundo' ));
        break;
    
    // ENGLISH
    case 'en-US':
    default:
        echo json_encode(array( 'data' => 'hello world' ));
        break;

}
