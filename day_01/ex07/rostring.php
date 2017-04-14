#!/usr/bin/php
<?php
function ft_split($str) {
	$str = preg_replace('/ +/', ' ', $str);
	$str = trim($str);
	$arr = explode(" ", $str);
	return $arr;
}

if ($argc > 1) {
	$arr = ft_split($argv[1]);
	for ($i = 1; $i < count($arr); $i++) {
		echo $arr[$i]." ";
	}
	echo $arr[0]."\n";
}
?>
