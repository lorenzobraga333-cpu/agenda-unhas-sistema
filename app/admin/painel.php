
<?php
    session_start();

    if(!isset($_SESSION["admin_logado"])){
        header("Location: login.php");
        exit;
    }

    '<a href="logout.php?">Sair</a>';

    require_once __DIR__ . "/../config/conexao.php";

    $sqlAdmin = "SELECT * FROM agendamentos ORDER BY data, horario";
    $resultadoAdmin = $conn->query($sqlAdmin);

    $total = "SELECT SUM(valor) as total FROM agendamentos WHERE status = 'confirmado'";
    $sqlFaturamento = $conn->query($total);
    $rowTotal = $sqlFaturamento->fetch_assoc();
    $faturamento = $rowTotal["total"];

    $agenda = "SELECT COUNT(*) as total FROM agendamentos";
    $sqlAgendamentos = $conn->query($agenda);
    $rowTotalAgendamentos = $sqlAgendamentos->fetch_assoc();
    $totalAgendamentos = $rowTotalAgendamentos["total"];

    $agendamentosConf = "SELECT COUNT(*) as total FROM agendamentos WHERE status = 'confirmado'";
    $sqlAgendamentosConf = $conn->query($agendamentosConf);
    $rowTotalConf = $sqlAgendamentosConf->fetch_assoc();
    $totalAgendamentosConf = $rowTotalConf["total"];

    $agendamentosPend = "SELECT COUNT(*) as total FROM agendamentos WHERE status = 'pendente'";
    $sqlAgendamentosPend = $conn->query($agendamentosPend);
    $rowTotalPend = $sqlAgendamentosPend->fetch_assoc();
    $totalAgendamentosPend = $rowTotalPend["total"];

    require_once __DIR__ . "/painel-layout.php";