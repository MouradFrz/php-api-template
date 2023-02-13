<?php

namespace App\Database;

use PDO;

class Database
{
    public static function connect()
    {
        $host = $_ENV['DB_HOST'];
        $port = $_ENV['DB_PORT'];
        $username = $_ENV['DB_USERNAME'];
        $password = $_ENV['DB_PASSWORD'];
        $name = $_ENV['DB_NAME'];

        return new PDO(
            "mysql:host=$host:$port;dbname=$name",
            $username,
            $password
        );
    }
}
