#!/usr/bin/php
<?php
	# http://man7.org/linux/man-pages/man5/utmp.5.html
	# https://github.com/garabik/python-utmp/blob/master/examples/who.py

	date_default_timezone_set('Europe/Bucharest');
	$utmp_file = fopen('/var/run/utmpx', 'r');
	$arr = array();
	while ($record = fread($utmp_file, 628)) {
		$data = unpack('a256user/a4id/a32line/ipid/itype/I2time/a256host/i16pad', $record);
		if ($data['type'] == 7) { # aka. USER_PROCESS
			$arr[] = $data;
		}
	}
	ksort($arr);
	foreach ($arr as $key) {
		$str = sprintf('%14s    %14s    %s',
			$key['user'],
			$key['line'],
			date('M d H:i', $key['time1'])
		);
		$str = preg_filter("/[^[:print:]]/", '', $str);
		echo $str." \n";
	}
?>
