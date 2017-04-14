#!/usr/bin/php
<?php
if ($argc > 1 && file_exists($argv[1])) {
	$handle = fopen($argv[1], 'r');
	$html = "";
	while ($handle && !feof($handle)) {
		$html = $html.fgets($handle);
	}
	$html = preg_replace_callback("/(<a )(.*?)(>)(.*)(<\/a)/si", function($match) {
		$match[0] = preg_replace_callback("/( title=\")(.*?)(\")/mi", function($match) {
			return $match[1].strtoupper($match[2]).$match[3];
		}, $match[0]);

		$match[0] = preg_replace_callback("/(>)(.*?)(<)/si", function($match) {
			return $match[1].strtoupper($match[2]).$match[3];
		}, $match[0]);

		return ($match[0]);
	}, $html);

 	echo $html;
}
?>
