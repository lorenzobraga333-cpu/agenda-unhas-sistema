<?php
$root = isset($_SERVER['DOCUMENT_ROOT']) && is_dir($_SERVER['DOCUMENT_ROOT'] . '/vendor') 
    ? $_SERVER['DOCUMENT_ROOT'] . '/'
    : __DIR__ . '/../../';

require_once $root . 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable($root);
$dotenv->load();

$host = $_ENV['DB_HOST'];
$user = $_ENV['DB_USER'];
$password = $_ENV['DB_PASS'];
$database = $_ENV['DB_NAME'];

$conn = new mysqli($host, $user, $password, $database);

$conn->set_charset('utf8mb4');

if($conn->connect_error){
    die ("Erro na conexão . $conn->connect_error");
}

