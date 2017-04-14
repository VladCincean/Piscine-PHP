#!/usr/bin/php
<?php
function ft_split($str) {
	$str = preg_replace('/ +/', ' ', $str);
	$str = trim($str);
	$arr = explode(" ", $str);
	return $arr;
}

function ft_array_push($array, $array2) {
	for ($i = 0; $i < count($array2); $i++) {
		array_push($array, $array2[$i]);
	}
	return $array;
}

$array = array();
for ($i = 1; $i < $argc; $i++) {
	$array = ft_array_push($array, ft_split($argv[$i]));
}
sort($array);
for ($i = 0; $i < count($array); $i++) {
	echo $array[$i]."\n";
}
?>
