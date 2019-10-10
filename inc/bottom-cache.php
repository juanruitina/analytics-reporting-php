<?php
// https://catswhocode.com/phpcache/

// Cache the contents to a cache file
if ( !file_exists( $cachefolder ) ) {
		mkdir( $cachefolder, 0744 );
}
$cached = fopen($cachefile, 'w') /* or die("can't open file") */;
fwrite($cached, ob_get_contents());
fclose($cached);
ob_end_flush(); // Send the output to the browser

?>
