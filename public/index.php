<?php

require '../vendor/autoload.php';

use App\Controllers\UserController;
use App\Router\Router;

use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(str_replace('public', "", __DIR__));
$dotenv->load();

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PATCH, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Disposition, Content-Type, Content-Length, Accept-Encoding, Authorization");
header("Content-type:application/json");
header("Access-Control-Allow-Credentials: true");
$method = $_SERVER['REQUEST_METHOD'];
if ($method == "OPTIONS") {
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method,Access-Control-Request-Headers, Authorization");
    header("HTTP/1.1 200 OK");
    die();
}

$router = new Router();

$router->route("/dumpAllUsers", [UserController::class,"dumpAllUsers"]);

try {
    $router->resolve();
} catch (Exception $e) {
}





