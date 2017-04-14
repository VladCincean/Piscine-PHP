<?php
function ft_is_sort($arg) {
	$arr = array();
	for ($i = 0; $i < count($arg); $i++) {
		array_push($arr, $arg[$i]);
	}
	sort($arr);
	for ($i = 0; $i < count($arg); $i++) {
		if (strcmp($arg[$i], $arr[$i]) != 0) {
			return false;
		}
	}
	return true;
}
?>