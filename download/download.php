<?php

// REQUEST A DOWNLOAD?
$isDownload = isset($_REQUEST['download']);

if ($isDownload) {
    // ATTACHMENT IS FOR DOWNLOADS
    header('Content-Disposition: attachment; filename=file.txt');
    // ANY OUTPUT WILL BE DOWNLOADED
    echo 'hello world';
} else {
    // INLINE IS FOR SHOW IN BROWSER
    header('Content-Disposition: inline');
    // ANY OUTPUT WILL BE SHOWED
    echo 'hello world';
}
