<?php

    require_once __DIR__ . "/../config/conexao.php";
    
    $cliente = trim($_POST["cliente"] ?? "");
    $celular = trim($_POST["celular"] ?? "");
    $servico = trim($_POST["servico"] ?? "");
    $tipo = trim($_POST["tipo"] ?? "");
    $data = trim($_POST["data"] ?? "");
    $horario = trim($_POST["horario"] ?? "");
    $precos = [
        "Molde F1" => ["Aplicação" => 80.00, "Manutenção" => 65.00],
        "Banho de Gel" => ["Aplicação" => 65.00, "Manutenção" => 55.00],
        "Esmaltação em Gel" => ["Aplicação" => 55.00, "Manutenção" => 55.00],
        "Manicure Tradicional" => ["Valor" => 40.00]
        ];
    
    $pares = [
        "14:00:00" => "14:30:00",
        "14:30:00" => "14:00:00",
        "18:00:00" => "18:30:00",
        "18:30:00" => "18:00:00",
    ];

    $horarioPar = $pares[$horario];

    if($servico === "Manicure Tradicional" && $tipo == ""){
        $tipo = "Valor";
    }

    if(empty ($cliente) || empty ($celular) || empty ($servico) || empty ($tipo) || empty ($data) || empty ($horario)){
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

    if($dataHoraAgendamento < time() + 1800){
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

    $sqlVerificaHorario = "SELECT id FROM agendamentos WHERE data = ? AND horario = ? AND status != 'cancelado'";

    $stmtVerificaHorario = $conn->prepare($sqlVerificaHorario);
    $stmtVerificaHorario->bind_param("ss", $data, $horarioPar);
    $stmtVerificaHorario->execute();

    $resultadoVerificaHorario = $stmtVerificaHorario->get_result();

      if($resultadoVerificaHorario->num_rows > 0){
        header("Location: ../../public/index.php?erro=horario");
        exit;
    }

    if(!isset($precos[$servico][$tipo])){
        header("Location: ../../public/index.php?erro=campos");
        exit;
    }
    
    $valor = $precos[$servico][$tipo];

    $sql = "INSERT INTO agendamentos (cliente, celular, servico, data, horario, valor, tipo) VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssds", $cliente, $celular, $servico, $data, $horario, $valor, $tipo);

    if($stmt->execute()){
        header("Location: ../../public/index.php?sucesso=1");
        exit;
    }

    $stmt->close();
    $conn->close();

    