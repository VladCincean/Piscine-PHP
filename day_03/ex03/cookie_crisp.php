<?php
$action = $_GET['action'];
$name = $_GET['name'];
$value = $_GET['value'];
if ($action == "set") {
	setcookie($name, $value, time() + (8400 * 30));
} else if ($action == "get") {
	echo $_COOKIE[$name];
} else if ($action == "del") {
	setcookie($name, $value, time() - 1);
}
?>
