#!/usr/bin/php
<?php
while (true) {
	echo "Entrez un nombre: ";
	$f = trim(fgets(STDIN));
	if (feof(STDIN)) {
		echo "\n";
		break;
	}
	if (is_numeric($f)) {
		echo "Le chiffre ".$f." est ";
		if ($f % 2 == 0) {
			echo "Pair\n";
		} else {
			echo "Impair\n";
		}
	}
	else if(!is_numeric($f)) {
		echo "'".$f."' n'est pas un chiffre\n";
	}
}
?>
