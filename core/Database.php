<?php

// not yet implemented

namespace Core;
use PDO;
use PDOException;

require_once __DIR__ . '/../bootstrap.php';

class Database {
    private $pdo;

    public function __construct($host, $port, $dbname, $user, $pass) {
        if (empty($host) || empty($port) || empty($dbname) || empty($user)) {
            die("Database configuration is missing. Check your config.php.");
        }

        $dsn = "pgsql:host={$host};port={$port};dbname={$dbname};";

        try {
            $this->pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;", $user, $pass, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        } catch (PDOException $e) {
            exit("Database connection failed.");
        }
    }

    public function query($sql, $params = []) {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
