<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "agenda_unhas";

$conn = new mysqli($host, $user, $password, $database);

$conn->set_charset('utf8mb4');

if($conn->connect_error){
    die ("Erro na conexão . $conn->connect_error");
}

