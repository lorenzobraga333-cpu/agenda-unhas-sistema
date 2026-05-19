<?php 
    session_start();

    if(!isset($_SESSION["admin_logado"])){
        header("Location: login.php");
        exit;
    }

    require_once __DIR__ . "/../config/conexao.php";

    $id = $_GET["id"] ?? " ";
    $status = $_GET["status"] ?? " ";

    if(empty($id) || !is_numeric($id)){
    header("Location: painel.php");
    exit;
    }
    
    $id = intval($id);

    if($status != "confirmado" && $status != "cancelado"){
    header("Location: painel.php");
    exit;
    }

    $sqlStatus = "UPDATE agendamentos SET status = ? WHERE id = ?"; 
    $stmtStatus = $conn->prepare($sqlStatus);
    $stmtStatus->bind_param("si", $status, $id);
    if($stmtStatus->execute()){
    header("Location: painel.php");
    exit;
    }