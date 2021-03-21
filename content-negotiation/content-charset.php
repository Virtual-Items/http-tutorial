<?php

// TRANSFORM THE TEXT TO THE ENCODING CHARSET
function format($text, $encoding) {
    return iconv(mb_detect_encoding($text, mb_detect_order(), true), $encoding, $text);
}

// GETTING REQUEST HEADERS
$req_headers = getallheaders();

// GETTING THE ACCEPT-CHARSET HEADER (IF NOT EXISTS IT ASSUMES IS UTF-8)
$AcceptCharset =
    empty($req_headers['Accept-Charset']) ?
    'utf-8' : $req_headers['Accept-Charset'];

// DETERMINE WHAT THE CLIENT EXPECTS
switch ($AcceptCharset) {

    // UTF-8
    case 'utf-8':
        header('Content-Charset: utf-8');
        echo format('letter: ñ', 'UTF-8');
        break;
    
    // ISO-8859-1
    case 'iso-8859-1':
    default:
        header('Content-Charset: iso-8859-1');
        echo format('letter: ñ', 'ISO-8859-1');
        break;

}
