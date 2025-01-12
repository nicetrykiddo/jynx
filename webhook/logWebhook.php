<?php

$log_file = __DIR__ . '/../storage/webhook_log.txt';
$update = file_get_contents("php://input");

file_put_contents($log_file, $update . PHP_EOL, FILE_APPEND);

?>
