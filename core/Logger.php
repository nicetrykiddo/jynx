<?php

namespace Core;

class Logger {
    private static $log_file = __DIR__ . '/../storage/logs.txt';

    public static function log($message) {
        $date = date("Y-m-d H:i:s");
        file_put_contents(self::$log_file, "[$date] $message" . PHP_EOL, FILE_APPEND);
    }
}

?>
