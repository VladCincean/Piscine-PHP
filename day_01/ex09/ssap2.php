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

function ft_number($arg) {
	return is_numeric($arg);
}

function ft_alpha($arg) {
	return ctype_alpha($arg);
}

function ft_other($arg) {
	return !ft_number($arg) && !ft_alpha($arg);
}

$array = array();
for ($i = 1; $i < $argc; $i++) {
	$array = ft_array_push($array, ft_split($argv[$i]));
}

$array_alpha = array_filter($array, "ft_alpha");
$array_number = array_filter($array, "ft_number");
$array_other = array_filter($array, "ft_other");

usort($array_alpha, 'strnatcasecmp');
for ($i = 0; $i < count($array_alpha); $i++) {
	echo $array_alpha[$i]."\n";
}


sort($array_number);
for ($i = 0; $i < count($array_number); $i++) {
	echo $array_number[$i]."\n";
}


sort($array_other);
for ($i = 0; $i < count($array_other); $i++) {
	echo $array_other[$i]."\n";
}
?>
