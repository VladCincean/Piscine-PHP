#!/usr/bin/php
<?php
function download($url, $name) {
	$ch = curl_init($url);
	$fd = fopen($name, 'wb');
	curl_setopt($ch, CURLOPT_FILE, $fd);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_exec($ch);
	curl_close($ch);
	fclose($fd);
}


?>
