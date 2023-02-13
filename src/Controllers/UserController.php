<?php

namespace App\Controllers;

use App\Database\Database;
use PDO;

class UserController
{
    public static function dumpAllUsers()
    {
        $pdo = Database::connect();
        $stmt = $pdo->prepare("SELECT * FROM users");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        echo json_encode($result);
    }
}
