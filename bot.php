<?php

require_once __DIR__ . '/bootstrap.php';

use Core\Bot;
use Core\Database;
use Core\Logger;

$bot = new Bot($bot_token);

if (strpos($message, "/start") === 0) {
    require_once __DIR__ . "/commands/start.php";
}

if (isset($message) && strpos($message, "/help") === 0) {
    require_once __DIR__ . "/commands/help.php";
}


?>
