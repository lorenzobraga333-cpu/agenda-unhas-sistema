<?php
    session_start();

    if(!isset($_SESSION["admin_logado"])){
        header("Location: login.php");
        exit;
    }

    echo '<a href="logout.php?">Sair</a>';

    require_once __DIR__ . "/../config/conexao.php";

    $sqlAdmin = "SELECT * FROM agendamentos ORDER BY data, horario";
    $resultadoAdmin = $conn->query($sqlAdmin);

    if($resultadoAdmin->num_rows > 0){
     while($agendamento = $resultadoAdmin->fetch_assoc()){
         echo "ID: " . intval($agendamento["id"]) . "<br>";
         echo "Cliente: " . htmlspecialchars($agendamento ["cliente"]) . "<br>";
         echo "Celular: " . htmlspecialchars($agendamento ["celular"]) . "<br>";
         echo "Serviço: " . htmlspecialchars($agendamento ["servico"]) . "<br>";
         echo "Data: " . htmlspecialchars($agendamento ["data"]) . "<br>";
         echo "Horário: " . htmlspecialchars($agendamento ["horario"]) . "<br>";
         echo "Status: " . htmlspecialchars($agendamento ["status"]) . "<br>";
         echo '<a href="alterar-status.php?id=' . intval($agendamento["id"]) . '&status=confirmado">Confirmar</a>';
         echo "<hr>";
         echo '<a href="alterar-status.php?id=' . intval($agendamento["id"]) . '&status=cancelado">Cancelar</a>';
         echo "<hr>";
         }
    } else {
    echo "Nenhum agendamento encontrado.";
    }

