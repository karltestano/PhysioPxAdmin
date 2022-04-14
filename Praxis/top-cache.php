<?php
$url = $_SERVER["SCRIPT_NAME"];
$break = Explode('/', $url);
$file = $break[count($break) - 1];

$ds = DIRECTORY_SEPARATOR;
$sessStore = LINKROOT . $ds . "SessionStore" . $ds . session_id() . $ds;
$storeFolder = $_SERVER['DOCUMENT_ROOT'] . $sessStore;

if ( !is_dir($storeFolder)) {
    if (!mkdir ( $storeFolder, 0755, true )) {
            die('Failed to create folder...'. $storeFolder);
    }
}

$cachefile = $storeFolder . $ds . 'cached-'.substr_replace($file ,"",-4).'.html';
$cachetime = 18000;
 
// Serve from the cache if it is younger than $cachetime
if (file_exists($cachefile) && time() - $cachetime < filemtime($cachefile)) {
    echo "<!-- Cached copy, generated ".date('H:i', filemtime($cachefile))." -->\n";
    include($cachefile);
    exit;
}
ob_start(); // Start the output buffer
