<?php
session_start();
if ($_SESSION != null && $_SESSION["loggued_on_user"] != "") {
	echo $_SESSION["loggued_on_user"]."\n";
} else {
	echo "ERROR\n";
}
?>
