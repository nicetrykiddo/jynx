<?php

error_reporting(0);

require_once __DIR__ . '/../core/Logger.php';

use Core\Logger;

$update = json_decode(file_get_contents("php://input"), true);

if (!$update) {
    Logger::log("Invalid webhook request received.");
    exit();
}


require_once __DIR__ . '/../bot.php';

?>
