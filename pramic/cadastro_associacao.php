<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/cadastro_associado.css" type="text/css">
    <script src="javascript/tratamento-input.js"></script>
</head>

<body>

    <header>
        <img src="imagens/pramic-logo.png" alt="logo" id="logo">
        <nav>
            <a href="home.html" class="text-nav">PÁGINA INICIAL &nbsp;&nbsp;|</a>
            <a href="mural_eventos.html" class="text-nav">MURAL DE EVENTOS &nbsp;&nbsp;|</a>
            <a href="cadastro_associacao.html" class="text-nav">SEJA UM ASSOCIADO</a>
        </nav>
    </header>

    <main>
        <div class="header">
            <h2>CADASTRO DE ASSOCIADOS</h2>
        </div>
        <div id="formulario-associados">
            <label for="nome-associado" class="text-cadastro" id="label-nome">Nome da Associação:</label>
            <input type="text" id="nome-associado" placeholder="Nome da Associação" class="text-cadastro" onblur="tratarNome('nome-associado')" maxlength="32">

            <label for="select-comunidade" class="text-cadastro" id="label-comunidade">Comunidade:</label>
            <select name="comunidade" id="select-comunidade" class="text-cadastro">
                <option value="selecione">Selecione</option>
                <option value="acari">Acari</option>
                <option value="cidade-de-deus">Cidade de Deus</option>
                <option value="complexo-do-alemao">Complexo do Alemão</option>
                <option value="jacarezinho">Jacarezinho</option>
                <option value="mangueira">Mangueira</option>
                <option value="manguinhos">Manguinhos</option>
                <option value="mare">Maré</option>
                <option value="parada-de-lucas">Parada de Lucas</option>
                <option value="rocinha">Rocinha</option>
                <option value="santa-marta">Santa Marta</option>
            </select>

            <label for="telefone1" class="text-cadastro" id="label-telefone1">Telefone:</label>
            <input type="tel" name="telefone1" id="telefone1" class="text-cadastro" onblur="tratarTelefone('telefone1')" maxlength="11">
            <label for="telefone2" class="text-cadastro" id="label-telefone2">Telefone 2 (Opcional):</label>
            <input type="tel" name="telefone2" id="telefone2" class="text-cadastro" onblur="tratarTelefone('telefone2')" maxlength="11">
            <label for="email1" id="label-email1" class="text-cadastro">Email:</label>
            <input type="email1" name="email1" id="email1" class="text-cadastro" onblur="verificarEmail('email1')"> <br>
            <br>
            <button id="botao-cadastrar">Cadastrar</button>
        </div>
    </main>

    <footer></footer>

</body>

</html>