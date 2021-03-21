<?php

// GETTING REQUEST HEADERS
$req_headers = getallheaders();

// GETTING THE ACCEPT HEADER (IF NOT EXISTS IT ASSUMES IS PLAIN TEXT)
$agent = empty($req_headers['User-Agent']) ? '*/*' : $req_headers['User-Agent'];

// FROM MOZILLA
if (preg_match('/^mozilla/i', $agent)) {
    echo json_encode(array( 'data' => 'hello mozilla' ));
}

// FROM CHROME
else if (preg_match('/^chrome/i', $agent)) {
    echo json_encode(array( 'data' => 'hello chrome' ));
}

// FROM ANY
else {
    echo json_encode(array( 'data' => 'hello agent' ));
}