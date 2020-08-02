<?php
include "_conexao.php";
$token = $_GET['k'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/evento.css" type="text/css">
    <script src="javascript/tratamento-input.js"></script>
</head>

<body>
    <header>
        <img src="imagens/pramic-logo.png" alt="logo" id="logo" />
        <nav>
            <a href="home.html" class="text-nav">PÁGINA INICIAL &nbsp;&nbsp;|</a>
            <a href="mural_eventos.html" class="text-nav">MURAL DE EVENTOS &nbsp;&nbsp;|</a>
            <a href="cadastro_associacao.html" class="text-nav">SEJA UM ASSOCIADO</a>
        </nav>
    </header>

    <main>
        <section class="header">
            <h3>Título do Evento</h3>
        </section>

        <img src="imagens_eventos/foto-evento.jpg" alt="foto-valao" class="imagem-evento">

        <section class="container-descricao">
            <p class="descricao-evento2">Descrição do Evento mais aprofundada! + Atividades!</p>
        </section>

        <section class="container-data-local">
            <span class="data-local-evento">Comunidade: Rocinha</span>
            <span class="data-local-evento">Endereço: Rua da mamãe, número 50</span>
            <span class="data-local-evento">Data: 01/01/2021</span>
            <span class="data-local-evento">Hora: 12:30</span>
        </section>

        <section class="container-formulario">
            <label for="nome-vexterno" class="text-label" id="label-nome">Nome Completo:</label>
            <input type="text" id="nome-vexterno" class="input-evento">
            <label for="idade" class="text-label">Idade:</label>
            <input type="text" name="idade" id="idade" class="input-evento" maxlength="2" onblur="tratarIdade('idade')">
            <label for="tel1" class="text-label">Telefone (Opcional):</label>
            <input type="tel" name="tel1" id="tel1" class="input-evento" onblur="tratarTelefone('tel1')" maxlength="11">
            <label for="email2" class="text-label">Email:</label>
            <input type="email" name="email2" id="email2" class="input-evento" onblur="verificarEmail('email2')">
            <label for="cpf1" class="text-label">CPF:</label>
            <input type="text" name="cpf1" id="cpf1" class="input-evento" onblur="inputCPF('cpf1')">
            <button id="botao-cadastro">Voluntariar-se</button>
        </section>
    </main>

    <footer></footer>
</body>

</html>