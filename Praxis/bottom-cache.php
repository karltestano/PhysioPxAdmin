<?php
// Cache the contents to a file
$cached = fopen($cachefile, 'w');
//
// with this write the SessionStore is created
//
fwrite($cached, ob_get_contents());
fclose($cached);
ob_end_flush(); // Send the output to the browser
?>
