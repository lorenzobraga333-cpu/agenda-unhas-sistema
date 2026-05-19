<?php

    require_once __DIR__ . "/../config/conexao.php";
    
    $cliente = trim($_POST["cliente"] ?? "");
    $celular = trim($_POST["celular"] ?? "");
    $servico = trim($_POST["servico"] ?? "");
    $data = trim($_POST["data"] ?? "");
    $horario = trim($_POST["horario"] ?? "");

    if(empty ($cliente) || empty ($celular) || empty ($servico) || empty ($data) || empty ($horario)){
        header("Location: ../../public/index.php?erro=campos");
        exit;
    }

    if(!preg_match('/^\d{10,11}$/', $celular)){
        header("Location: ../../public/index.php?erro=celular");
        exit;
    }

    $dataHoraAgendamento = strtotime($data . " " . $horario);

    if($dataHoraAgendamento === false){
        header("Location: ../../public/index.php?erro=data");
        exit;
    }

    if($dataHoraAgendamento < time()){
        header("Location: ../../public/index.php?erro=passado");
        exit;
    }

    $sqlVerifica = "SELECT id FROM agendamentos WHERE data = ? AND horario = ? AND status != 'cancelado'";

    $stmtVerifica = $conn->prepare($sqlVerifica);
    $stmtVerifica->bind_param("ss", $data, $horario);
    $stmtVerifica->execute();

    $resultadoVerifica = $stmtVerifica->get_result();

    if($resultadoVerifica->num_rows > 0){
        header("Location: ../../public/index.php?erro=horario");
        exit;
    }

    $sql = "INSERT INTO agendamentos (cliente, celular, servico, data, horario) VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $cliente, $celular, $servico, $data, $horario);

    if($stmt->execute()){
        header("Location: ../../public/index.php?sucesso=1");
        exit;
    }

    $stmt->close();
    $conn->close();

    