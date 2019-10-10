<?php
// https://catswhocode.com/phpcache/

$url = $_SERVER["SCRIPT_NAME"];
$cachefolder = "cache";
$break = Explode('/', $url);
$file = $break[count($break) - 1];
$cachefile = $cachefolder . '/cached-'.substr_replace($file ,"",-4).'.html';
if ( !isset( $cachetime ) ) {
	$cachetime = 86400; // One day
}

// Serve from the cache if it is younger than $cachetime
if (file_exists($cachefile) && time() - $cachetime < filemtime($cachefile)) {
    // echo "<!-- Cached copy, generated ".date('H:i:s', filemtime($cachefile))." -->\n";
    readfile($cachefile);
    exit;
}
ob_start(); // Start the output buffer

?>
