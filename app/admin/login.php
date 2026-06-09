<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();

require_once __DIR__ . "/../config/conexao.php";

$email = trim($_POST["email"] ?? " ");
$senha = trim($_POST["senha"] ?? " ");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($email == " " || $senha == " "){
        echo "Preencha todos os campos";
    } else {

        $sqlLogin = "SELECT * FROM usuarios WHERE email = ?";
        $stmtLogin = $conn->prepare($sqlLogin);
        $stmtLogin->bind_param("s", $email);
        $stmtLogin->execute();

        $resultadoLogin = $stmtLogin->get_result();

        if($resultadoLogin->num_rows > 0){
                $usuario = $resultadoLogin->fetch_assoc();
                if(password_verify($senha, $usuario["senha"])){
                $_SESSION["admin_logado"] = true;
                $_SESSION["admin_id"] = $usuario["id"];
                $_SESSION["admin_nome"] = $usuario["nome"];
                header("Location: painel.php");
                exit;
            } else {
                echo "E-mail ou senha inválidos";
            }
        } else {
            echo "E-mail ou senha inválidos";
        }
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <h1>Acesso administrativo</h1>
        <form action="login.php" method="POST">
        <label for="email">E-mail:</label>
        <input type="email" id= "email" name= "email" placeholder= "Digite seu E-mail." required>
        <label for="senha">Senha:</label>
        <input type="password" id= "senha" name= "senha" placeholder= "Digite sua senha." required>
        <input type="submit" value= "Enviar >">
        </form>
    </div>
</body>
</html>