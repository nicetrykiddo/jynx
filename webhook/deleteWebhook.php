<?php

require_once __DIR__ . '/../config.php';

$response = file_get_contents("https://api.telegram.org/bot$bot_token/deleteWebhook");

echo $response;

?>
