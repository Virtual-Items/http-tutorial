<?php

// GETTING REQUEST HEADERS
$req_headers = getallheaders();

// GETTING THE ACCEPT HEADER (IF NOT EXISTS IT ASSUMES IS PLAIN TEXT)
$accept = empty($req_headers['Accept']) ? 'plain/text' : $req_headers['Accept'];

// DETERMINE WHAT THE CLIENT EXPECTS
switch ($accept) {

    // CLIENT EXPECTS A JSON
    case 'application/json':
        header('Content-Type: application/json');
        echo json_encode(array( 'data' => 'hello world' ));
        break;

    // CLIENT EXPECTS A TEXT
    case 'plain/text':
    default:
        header('Content-Type: plain/text');
        echo 'data: hello world';
        break;

}
