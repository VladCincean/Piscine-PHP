<?php
$passwd_file = "../private/passwd";

if ($_POST["submit"] == "OK"){
	if ($_POST["passwd"] != "" && $_POST["login"] != "") {
		if (!file_exists("../private")) {
			mkdir("../private");
		}
		if (!file_exists($passwd_file)) {
			file_put_contents($passwd_file, "");
		}

		$accounts = unserialize(file_get_contents($passwd_file));

		$account = [
			"login" => $_POST["login"],
			"passwd" => hash("whirlpool", $_POST["passwd"])
		];

		$acc_exists = 0;

		foreach ($accounts as $key => $value) {
			if ($value["login"] == $_POST["login"]) {
				$acc_exists = 1;
				break;
			}
		}

		if ($acc_exists == 0) {
			$accounts[] = $account;
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
