<?php
$base = strpos($_SERVER['HTTP_HOST'], 'localhost') !== false 
    ? '/agenda_unhas/public' 
    : '/public';

    session_start();
if(empty($_SESSION['csrf_token'])){
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=no">
    <title>Agenda de unhas</title>
    <link rel="stylesheet" href="<?= $base ?>/assets/css/style.css?v=11">
    <link rel="stylesheet" href="<?= $base ?>/assets/css/media.css?v=11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/l10n/pt.js"></script>
    <script src="../app/agendamento/agendamento.js"></script>
</head>
<div id="toast">
    
</div>
<body>
    <header>
        <h1>    
            <span class="logo-profissao">Nail Designer<i class="fas fa-wand-magic-sparkles icon-logo"></i></span>
            <span class="logo-nome">Vitória da Rosa</span>
        </h1>
        <nav>
            <a href="#inicio">Início</a>
            <a href="#servicos">Serviços</a>
            <a href="#modelo">Modelos</a>
            <a href="#agendamento">Agendar<i class="fas fa-calendar-days icon-nav"></i></a>
            </nav>
    </header>
    
    <section id=inicio>
        <div class="inicio-container">
        <div class="banner-conteudo">
        <h2>
            <span class="banner-cima">Unhas em Molde F1 feitas com <span class="texto-rosa">carinho,</span></span>
            <span class="banner-baixo"> <span class="texto-rosa">beleza</span> e <span class="texto-rosa">acabamento impecável.</span></span>
        </h2>
        <p>Realce sua beleza com um atendimento cuidadoso, delicado e pensado para você.</p>
        <a href="#agendamento">Agendar agora</a>
        </div>
        <div class="inicio-foto">
            <img src="<?= $base ?>/assets/img/foto-hero.jpeg" alt="foto-hero">
        </div>
        </div>
    </section>
    

    <section id="servicos">
    <h2>Serviços</h2>

    <div class="servicos-container">
    <div class="servicos-card">
    <div class="servicos-icon">
        <i class="fas fa-hand-sparkles icon-servico"></i>
    </div>
    <h3>
        Molde F1
    </h3>
    <p>Alongamento feito com molde F1, ideal para quem deseja unhas mais longas, bonitas e com acabamento delicado. Proporciona um resultado elegante, resistente e personalizado conforme o estilo da cliente.</p>
<div class="servicos-tags">
    <span class="tag-preco">Aplicação: R$ 80,00</span>
    <span class="tag-preco">Manutenção: R$ 65,00</span>
</div>
</div>

   <div class="servicos-card">
    <div class="servicos-icon">
        <i class="fas fa-gem icon-servico"></i>
    </div>
    <h3>
        Banho de Gel
    </h3>
    <p>Aplicação de uma camada de gel sobre a unha natural para trazer mais resistência, brilho e durabilidade. Ideal para fortalecer as unhas sem necessariamente alongar.</p>
<div class="servicos-tags">
    <span class="tag-preco">Aplicação: R$ 65,00</span>
    <span class="tag-preco">Manutenção: R$ 55,00</span>
</div>
</div>

    <div class="servicos-card">
    <div class="servicos-icon">
        <i class="fas fa-spray-can-sparkles icon-servico"></i>
    </div>
    <h3>
        Esmaltação em Gel
    </h3>
    <p>Esmaltação com acabamento intenso, brilho prolongado e maior durabilidade em comparação à esmaltação tradicional. Ideal para quem busca unhas bonitas por mais tempo.</p>
<div class="servicos-tags">
    <span class="tag-preco">Aplicação: R$ 55,00</span>
    <span class="tag-preco">Manutenção: R$ 55,00</span>
</div>
</div>

    <div class="servicos-card">
    <div class="servicos-icon">
        <i class="fas fa-hand icon-servico"></i>
    </div>
    <h3>
        Manicure Tradicional
    </h3>  
    <p>Cuidado completo para as unhas naturais, com cutilagem, lixamento e esmaltação tradicional. Ideal para quem busca praticidade, beleza e um acabamento delicado no dia a dia.</p>
<div class="servicos-tags">
    <span class="tag-preco">Valor: R$ 40,00</span>
</div>
</div>

<div class="servicos-card">
<div class="servicos-icon">
    <i class="fas fa-star icon-servico"></i>
</div>
    <h3>
        Adicionais
    </h3>
<div class="servicos-tags">
    <span class="tag-preco">Unha quebrada: + R$ 8,00</span>
    <span class="tag-preco">Formato Stiletto: + R$ 5,00</span>
    <span class="tag-preco">Remoção: + R$ 30,00</span>
    <span class="tag-preco">Esmaltação em gel: + R$ 10,00</span>
</div>
</div>
    </section>
    </div>
    </div>

    <section id="pagamento">
    <h2>Formas de pagamento</h2>
    <div class="pagamento-descricao">Aceitamos as seguintes formas de pagamento:</div>
    <div class="pagamento-container">
    <div class="pagamento-card"><div class="pagamento-icon"><i class="fab fa-pix icon-pagamento"></i></div><h3>PIX</h3>
    <p>Pagamento rápido e seguro.</p>
    </div>
    <div class="pagamento-card"><div class="pagamento-icon"><i class="fas fa-money-bill-wave icon-pagamento"></i></div><h3>Dinheiro</h3>
    <p>Pagamento no atendimento</p>
    </div>
    </div>
    </section>

    <section id="modelo">
    <h2>Modelos de unhas</h2>
    <p>Inspire-se em alguns dos trabalhos realizados.</p>
    <div class="modelos-container">
        <div class="modelo-card">
            <img src="<?= $base ?>/assets/img/Modelo1.png" class="modelo-1">
        </div>
        <div class="modelo-card">
            <img src="<?= $base ?>/assets/img/Modelo2.jpeg" class="modelo-2">
        </div>
        <div class="modelo-card">
            <img src="<?= $base ?>/assets/img/Modelo3.png" class="modelo-3">
        </div>
        <div class="modelo-card">
            <img src="<?= $base ?>/assets/img/Modelo4.png" class="modelo-4">
        </div>
        <div class="modelo-card">
            <img src="<?= $base ?>/assets/img/Modelo5.jpeg" class="modelo-5">
        </div>
        <div class="modelo-card">
            <img src="<?= $base ?>/assets/img/Modelo6.jpeg" class="modelo-6">
        </div>
    </div>
    <a class="modelo-botao" href="https://www.instagram.com/nails.vitoriarosa?igsh=MXcyZTU3emJjaTNxcA==">Ver mais modelos<i class="fas fa-images icon-botao"></i></a>
    </section>

<section id="agendamento">
<div class="agendamento-conteudo">
<h2>Agende seu horário</h2>
<p>Preencha os dados abaixo para <br> solicitar o seu atendimento.</p>
</div>

<div class="agendamento-form">
<form action="../app/agendamento/salvar.php" method="POST">
<input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">

<div class="campo-form">
<label for="cliente"><i class="fas fa-user icon-label"></i>Nome:</label>
<input type="text" id= "cliente" name= "cliente" placeholder= "Digite o seu nome" required>
</div>

<div class="campo-form">
<label for="celular"><i class="fas fa-phone icon-label"></i>Celular:</label>
<input type="tel" id= "celular" name= "celular" placeholder= "(51)9999-99999" required>
</div>

<div class="campo-form">
<label for="servico"><i class="fas fa-list-check icon-label"></i>Serviço:</label>
<select id= "servico" name= "servico" required>
    <option value="" diable selected>Selecione seu serviço</option>
    <option value="Molde F1">Molde F1</option>
    <option value="Banho de Gel">Banho de Gel</option>
    <option value="Esmaltação em Gel">Esmaltação em Gel</option>
    <option value="Manicure Tradicional">Manicure Tradicional</option>
</select>
<label id="label-tipo" for="valor" style="display: none">Tipo de serviço:</label>
<select name="tipo" id="valor" style="display: none"></select>
</div>

<div class="campo-form">
<label for="data"><i class="fas fa-calendar-days icon-label"></i>Data:</label>
<input type="date" id= "data" name= "data" required>
</div>

<div class="campo-form">
<label for="horario"><i class="fas fa-clock icon-label"></i>Horário:</label>
<select id= "horario" name= "horario" required>
    <option value="" diable selected>Horário</option>
    <option value="14:00:00">14h</option>
    <option value="14:30:00">14:30h</option>
    <option value="18:00:00">18h</option>
    <option value="18:30:00">18:30h</option>
</select>
</div>

<button type="submit" class="botao-agendamento">Enviar agendamento <i class="fas fa-calendar-check icon-botao"></i></button>
</form>
</div>
</section>

<footer>
<div class="footer-container">

<div class="footer-marca">
    <div class="profissao-marca">Nail Designer</div>
    <div class="nome-marca">Vitória da Rosa</div>
<div class="footer-redes">
    <a href="https://www.instagram.com/nails.vitoriarosa?igsh=MXcyZTU3emJjaTNxcA==" class="icon-redes"><i class="fab fa-instagram icon-sociais"></i></a>
    <a href="https://wa.me/5551999452090" class="icon-redes"><i class="fab fa-whatsapp icon-sociais"></i></a>
</div>
</div>

<div class="footer-atendimento">
    <h3>Atendimento</h3>
    <p>Segunda à Sábado</p>
    <p>Com horário marcado.</p>
</div>

<div class="footer-info">
    <h2>Local de atendimento</h2>
    <p>Atendimento na minha residência</p>
    <p>Bairro: Mathias Velho - Canoas/RS</p>
</div>

</div>
<div class="footer-copy">
    <p>© 2026 - Todos os direitos reservados.</p>
</div>
</footer>
</body>
</html>