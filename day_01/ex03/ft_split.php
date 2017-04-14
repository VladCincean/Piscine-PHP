#!/usr/bin/php
<?php
function ft_split($str) {
	$str = preg_replace('/ +/', ' ', $str);
	$str = trim($str);
	$arr = explode(" ", $str);
	sort($arr);
	return $arr;
}
?>
