<?php
$user = "zaz";
$pw = "jaimelespetitsponeys";
if ($_SERVER["PHP_AUTH_USER"] == $user && $_SERVER["PHP_AUTH_PW"] == $pw) {
	echo "<html><body>\n";
	echo "Bonjour Zaz<br />\n";
	echo "<img src='data:image/png;base64,";
	echo base64_encode(file_get_contents("../img/42.png"));
	echo "'>\n";
	echo "</body></html>";
} else {
	header("HTTP/1.1 401 Unauthorized");
	echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>";
}
?>
