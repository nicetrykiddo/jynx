<?php

// currently doesnt work !!!
// connect the webhook manually by visiting the url

require_once __DIR__ . '/../config.php';

echo ">>> Setting Webhook <<<";

$webhook_url = "https://5e46e6b80e47.ngrok.app/webhook/webhook.php";

$response = file_get_contents("https://api.telegram.org/bot$bot_token/setWebhook?url=$webhook_url");

echo $response;

?>
