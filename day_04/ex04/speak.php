<?php
$chat_file = "../private/chat";

//date_default_timezone_set('Europe/Bucharest');
session_start();
if ($_SESSION != null && $_SESSION["loggued_on_user"] != "") {
//    echo '<form name="speak.php" action="" method="GET">' . "\n" .
//        '   Msg: <input type="text" name="msg" value="" />' . "\n" .
//        '   <input type="submit" name="submit" value="OK" />' . "\n" .
//        '</form>';

    if ($_POST["submit"] == "OK") {
        if (!file_exists($chat_file)) {
            file_put_contents($chat_file, "");
        }

        $message = [
            "login" => $_SESSION["loggued_on_user"],
            "time" => time(),
            "msg" => $_POST["msg"]
        ];

        $fd = fopen($chat_file, 'a+');

        flock($fd, LOCK_SH);
        $messages = unserialize(file_get_contents($chat_file));
        flock($fd, LOCK_UN);

        $messages[] = $message;

        flock($fd, LOCK_EX);
        file_put_contents($chat_file, serialize($messages));
        flock($fd, LOCK_UN);

        fclose($fd);
    }
} else {
    echo "ERROR";
}
?>

<head>
    <script langage="javascript">top.frames['chat'].location = 'chat.php';</script>
</head>
<body>
<form name="speak.php" action="" method="POST">
    Msg: <input type="text" name="msg" value="" />
    <input type="submit" name="submit" value="OK" />
</form>
</body>