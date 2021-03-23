<?php

// IS REQUESTING A DOWNLOAD?
$isDownload = isset($_REQUEST['download']);

if ($isDownload) {
    // ATTACHMENT IS FOR DOWNLOADS
    header('Content-Disposition: attachment; filename=file.txt');
    // ANY OUTPUT WILL BE DOWNLOADED
    echo 'hello world';
    exit;
}

// INLINE IS FOR SHOW IN BROWSER
header('Content-Disposition: inline');

// ANY OUTPUT WILL BE SHOWED
echo 'hello world';

// YOU CAN USE THE "DOWNLOAD" ATTRIBUTE TO SPECIFY IN THE BROWSER
echo "<a
        download
        style=\"display: block;\"
        target=\"_blank\"
        href=\"http://localhost/http-tutorial/download/download.php?download\">
        Download as file
    </a>";