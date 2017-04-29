<?php
$passwd_file = "../private/passwd";

if ($_POST["submit"] == "OK"){
	if ($_POST["newpw"] != "" && $_POST["oldpw"] != "" && $_POST["login"] != "") {
		$accounts = unserialize(file_get_contents($passwd_file));

		$ok = 0;

		foreach ($accounts as $key => $value) {
			if ($value["login"] == $_POST["login"]) {
				if ($value["passwd"] == hash("whirlpool", $_POST["oldpw"])) {
					$accounts[$key]["passwd"] = hash("whirlpool", $_POST["newpw"]);
					$ok = 1;
				}
				break;
			}
		}

		if ($ok == 1) {
			file_put_contents($passwd_file, serialize($accounts));
			echo "OK";
            header('Location: index.html');
		} else {
			echo "ERROR";
		}
	} else {
		echo "ERROR";
	}
}
?>
