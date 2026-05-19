<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de unhas</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media.css">
</head>
<body>
    <header>
        <h1>
            <span class="logo-profissao"></i>Nail Designer</span>
            <span class="logo-nome">Vitória da Rosa</span>
        </h1>
        <nav>
            <a href="#inicio">Início</a>
            <a href="#servicos">Serviços</a>
            <a href="#modelo">Modelos</a>
            <a href="#agendamento">Agendar</a>
            </nav>
    </header>
    <section id=inicio>
        <div class="banner-conteudo">
        <h2>
            <span class="banner-cima">Unhas em Molde F1 feitas com carinho,</span>
            <span class="banner-baixo"> beleza e acabamento impecável.</span>
        </h2>
        <p>Realce sua beleza com um atendimento cuidadoso, delicado e pensado para você.</p>
        <a href="#agendamento">Agendar agora</a>
        </div>
    </section>

    <section id="servicos">
    <h2>Serviços</h2>

    <div class="servicos-container">
    <div class="servicos-card">
    <h3>Molde F1</h3>
    <p>Alongamento feito com molde F1, ideal para quem deseja unhas mais longas, bonitas e com acabamento delicado. Proporciona um resultado elegante, resistente e personalizado conforme o estilo da cliente.</p>
<div class="servicos-tags">
    <span class="tag-preco">Aplicação: R$ 80,00</span>
    <span class="tag-preco">Manutenção: R$ 65,00</span>
</div>
</div>

   <div class="servicos-card">
    <h3>Banho de Gel</h3>
    <p>Aplicação de uma camada de gel sobre a unha natural para trazer mais resistência, brilho e durabilidade. Ideal para fortalecer as unhas sem necessariamente alongar.</p>
<div class="servicos-tags">
    <span class="tag-preco">Aplicação: R$ 65,00</span>
    <span class="tag-preco">Manutenção: R$ 55,00</span>
</div>
</div>

    <div class="servicos-card">
    <h3>Blindagem</h3>
    <p>Técnica indicada para proteger e fortalecer as unhas naturais, ajudando a evitar quebras e descamações. Proporciona um acabamento leve, bonito e com maior durabilidade da esmaltação.</p>
<div class="servicos-tags">
    <span class="tag-preco">Valor: R$ 60,00</span>
</div>
</div>

    <div class="servicos-card">
    <h3>Esmaltação em Gel</h3>
    <p>Esmaltação com acabamento intenso, brilho prolongado e maior durabilidade em comparação à esmaltação tradicional. Ideal para quem busca unhas bonitas por mais tempo.</p>
<div class="servicos-tags">
    <span class="tag-preco">Aplicação: R$ 55,00</span>
    <span class="tag-preco">Manutenção: R$ 55,00</span>
</div>
</div>

    <div class="servicos-card">
    <h3>Manicure Tradicional</h3>  
    <p>Cuidado completo para as unhas naturais, com cutilagem, lixamento e esmaltação tradicional. Ideal para quem busca praticidade, beleza e um acabamento delicado no dia a dia.</p>
<div class="servicos-tags">
    <span class="tag-preco">Valor: R$ 40,00</span>
</div>
</div>

<div class="servicos-card">
    <h3>Adicionais</h3>
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
    <div class="pagamento-card"><h3>PIX</h3>
    <p>Pagamento rápido e seguro.</p>
    </div>
    <div class="pagamento-card"><h3>Dinheiro</h3>
    <p>Pagamento no atendimento</p>
    </div>
    </div>
    </section>

    <section id="modelo">
    <h2>Modelos de unhas</h2>
    <p>Inspire-se em alguns dos trabalhos realizados.</p>
    <div class="modelos-container">
        <div class="modelo-card">
            <img src="assets/img/Modelo1.png" alt="Modelo de unhas 1">
        </div>
        <div class="modelo-card">
            <img src="assets/img/Modelo2.jpeg" alt="Modelo de unhas 2">
        </div>
        <div class="modelo-card">
            <img src="assets/img/Modelo3.png" alt="Modelo de unhas 3">
        </div>
        <div class="modelo-card">
            <img src="assets/img/Modelo4.png" alt="Modelo de unhas 4">
        </div>
        <div class="modelo-card">
            <img src="assets/img/Modelo5.jpeg" alt="Modelo de unhas 5">
        </div>
        <div class="modelo-card">
            <img src="assets/img/Modelo6.jpeg" alt="Modelo de unhas 6">
        </div>
    </div>
    <a class="modelo-botao" href="https://www.instagram.com/nails.vitoriarosa?igsh=MXcyZTU3emJjaTNxcA==">Ver mais modelos</a>
    </section>

    <div class="mensagem">
    <?php if(isset($_GET['sucesso'])): ?>
    <p>Agendamento realizado com sucesso!</p>
    <?php endif ?>

    <?php if(isset($_GET['erro']) && $_GET['erro'] == "celular") : ?>
    <p>Celular inválido. Use apenas números com 10 a 11 dígitos.</p>
    <?php endif ?>

    <?php if(isset($_GET['erro']) && $_GET['erro'] == "campos") : ?>
    <p>Preencha todos os campos.</p>
    <?php endif ?>

    <?php if(isset($_GET['erro']) && $_GET['erro'] == "data") : ?>
    <p>Data inválida.</p>
    <?php endif ?>

    <?php if(isset($_GET['erro']) && $_GET['erro'] == "passado") : ?>
    <p>A data informada está no passado. Insira uma data atual.</p>
    <?php endif ?>

    <?php if(isset($_GET['erro']) && $_GET['erro'] == "horario") : ?>
    <p>O horário escolhido já está agendado.</p>
    <?php endif ?>
    </div>

<section id="agendamento">
<div class="agendamento-conteudo">
<h2>Agende seu horário</h2>
<p>Preencha os dados abaixo para <br> solicitar o seu atendimento.</p>
</div>

<div class="agendamento-form">
<form action="../app/agendamento/salvar.php" method="POST">

<div class="campo-form">
<label for="cliente">Nome:</label>
<input type="text" id= "cliente" name= "cliente" placeholder= "Digite o seu nome" required>
</div>

<div class="campo-form">
<label for="celular">Celular:</label>
<input type="tel" id= "celular" name= "celular" placeholder= "(51)9999-99999" required>
</div>

<div class="campo-form">
<label for="servico">Serviço:</label>
<select id= "servico" name= "servico" required>
    <option value="" diable selected>Selecione seu serviço</option>
    <option value="Molde F1">Molde F1</option>
    <option value="Banho de Gel">Banho de Gel</option>
    <option value="Blindagem">Blindagem</option>
    <option value="Esmaltação em Gel">Esmaltação em Gel</option>
    <option value="Manicure Tradiciona">Manicure Tradicional</option>
</select>
</div>

<div class="campo-form">
<label for="data">Data:</label>
<input type="date" id= "data" name= "data" required>
</div>

<div class="campo-form">
<label for="horario">Horário:</label>
<input type="time" id= "horario" name= "horario" required>
</div>

<button type="submit" class="botao-agendamento">Enviar agendamento</button>
</form>
</div>
</section>

<footer>
<div class="footer-container">

<div class="footer-marca">
    <div class="profissao-marca">Nail Designer</div>
    <div class="nome-marca">Vitória da Rosa</div>
<div class="footer-redes">
    <a href="https://www.instagram.com/nails.vitoriarosa?igsh=MXcyZTU3emJjaTNxcA==">Instagram</a>
    <a href="https://wa.me/5551999452090">WhatsApp</a>
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