<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="painel.css?v=2">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Painel de agendamentos</title>
</head>
<body>
    <header>
        <h1>
            <span class="painel-tittle">Painel de agendamento</span>
        </h1>
        <div class="botao-sair">
            <a href="logout.php">Sair</a>
        </div>
    </header> 
    <main>
        <div class="metricas-container">
            <div class="metrica-card total">
                <h2>Total</h2>
                <p><?php echo $totalAgendamentos?></p>
            </div>
            <div class="metrica-card confirmado">
                <h2>Confirmados</h2>
                <p><?php echo $totalAgendamentosConf?></p>
            </div>
            <div class="metrica-card pendente">
                <h2>Pendentes</h2>
                <p><?php echo $totalAgendamentosPend?></p>
            </div>
            <div class="metrica-card faturamento">
                <h2>Faturamento</h2>
                <p><?php echo 'R$' . $faturamento?></p>
            </div>
        </div>

        <div class="tabela-container">
            <table>
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Celular</th>
                        <th>Serviço</th>
                        <th>Data</th>
                        <th>Horário</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($agendamento = $resultadoAdmin->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($agendamento ["cliente"]); ?></td>
                        <td><?php echo htmlspecialchars($agendamento ["celular"]); ?></td>
                        <td><?php echo htmlspecialchars($agendamento ["servico"]); ?></td>
                        <td><?php echo htmlspecialchars($agendamento ["data"]); ?></td>
                        <td><?php echo htmlspecialchars($agendamento ["horario"]); ?></td>
                        <td><?php 
                        if($agendamento ["status"] === "confirmado"){
                            echo '<span class="badge-confirmado">Confirmado</span>';
                        }elseif($agendamento ["status"] === "pendente"){
                            echo '<span class="badge-pendente">Pendente</span>';
                        }else{
                            echo '<span class="badge-cancelado">Cancelado</span>';
                        }?></td>
                        <td>
                            <div class="acoes">
                            <?php
                            echo '<a class="btn-confirmar" href="alterar-status.php?id=' . intval($agendamento["id"]) . '&status=confirmado">Confirmar</a>';
                            echo '<a class="btn-cancelar" href="alterar-status.php?id=' . intval($agendamento["id"]) . '&status=cancelado">Cancelar</a>';
                            $celularLimpo = preg_replace('/\D/', '', $agendamento["celular"]);
                            $dataFormada = date('d/m/Y', strtotime($agendamento["data"]));
                            $mensagem = "Olá, " . $agendamento["cliente"] . "! 💖 \n\n";
                            $mensagem .= "Passando para falar sobre seu agendamento \n\n";
                            $mensagem .= "💅 Serviço: " . $agendamento["servico"] . "\n";
                            $mensagem .= "📅 Data: " . $dataFormada . "\n";
                            $mensagem .= "🕒 Horário: " . $agendamento["horario"] . "\n\n";
                            $mensagem .= "Qualquer dúvida, estou à disposição. ✨";
                            $linkWhatsapp = "https://wa.me/55" . $celularLimpo . "?text=" . rawurlencode($mensagem);
                            echo '<a href="' . $linkWhatsapp . '" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp icon-sociais"></i></a>';
                            ?>
                            </div>
                            </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </main> 
</body>
</html>