#!/usr/bin/php
<?php
date_default_timezone_set('Europe/Paris');

function ft_is_valid($a) {
	return preg_match(
		"/^(([L|l]undi)|([M|m]ardi)|([M|m]ercredi)|([J|j]eudi)"
		."|([V|v]endredi)|([S|s]amedi)|([D|d]imanche))( )"
		."([0-9]{1,2})( )(([J|j]anvier)|([F|f][é|e]vrier)"
		."|([M|m]ars)|([A|a]vril)|([M|m]ai)|([J|j]uin)|([J|j]uillet)"
		."|([A|a]o[û|u]t)|([S|s]eptembre)|([O|o]ctobre)|([N|n]ovembre)"
		."|([D|d][é|e]cembre))( )([0-9]){4}( )([0-9]){2}(:)"
		."([0-9]){2}(:)([0-9]){2}$/",
		$a
	);
}

if ($argc > 1) {
	$a = $argv[1];
	if (ft_is_valid($a) == 0) {
		echo "Wrong Format\n";
	} else {
		$date = explode(" ", $a);
		$time = explode(":", $date[4]);

		switch ($date[2]) {
			case "Janvier":
			case "janvier":
				$date[2] = 1;
				break;
			case "février":
			case "Février":
			case "fevrier":
			case "Fevrier":
				$date[2] = 2;
				break;
			case "mars":
			case "Mars":
				$date[2] = 3;
				break;
			case "avril":
			case "Avril":
				$date[2] = 4;
				break;
			case "mai":
			case "Mai":
				$date[2] = 5;
				break;
			case "juin":
			case "Juin":
				$date[2] = 6;
				break;
			case "Juillet":
			case "juillet":
				$date[2] = 7;
				break;
			case "août":
			case "Août":
			case "aout":
			case "Aout":
				$date[2] = 8;
				break;
			case "septembre":
			case "Septembre":
				$date[2] = 9;
				break;
			case "octobre":
			case "Octobre":
				$date[2] = 10;
				break;
			case "novembre":
			case "Novembre":
				$date[2] = 11;
				break;
			case "décembre":
			case "Décembre":
			case "decembre":
			case "Decembre":
				$date[2] = 12;
				break;
			default:
				$dae[2] = 0;
				break;
		}
		
		$timestamp = mktime($time[0], $time[1], $time[2], $date[2],
			$date[1], $date[3]);

		echo $timestamp."\n";
	}
}
?>
