<?php
$chat_file = "../private/chat";

date_default_timezone_set('Europe/Bucharest');
session_start();
if ($_SESSION != null && $_SESSION["loggued_on_user"] != "") {
    if (!file_exists($chat_file)) {
        file_put_contents($chat_file, "");
    }

    $fd = fopen($chat_file, 'r');

    flock($fd, LOCK_SH);
    $messages = unserialize(file_get_contents($chat_file));
    flock($fd, LOCK_UN);

    foreach ($messages as $key => $value) {
        echo '[' . date('H:m', $value['time']) . '] ';
        echo '<b>' . $value['login'] . '</b>: ';
        echo $value['msg'] . '<br />' . "\n";
    }
}
?>
