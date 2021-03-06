<?php

include "_conexao.php";
$query = "SELECT e.token, e.titulo, e.descricao, e.id_atividade, e.imagem, e.comunidade, e.local, e.data, e.hora, a.atividade
        FROM eventos e
        JOIN atividades a ON a.id = e.id_atividade
        ORDER BY e.data ASC";

$result = mysqli_query($conexao, $query);

if (!$result) {
    echo 'erro';
    die;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/mural-eventos.css" type="text/css">
</head>

<body>

    <header>
        <img src="imagens/pramic-logo.png" alt="logo" id="logo">
        <nav>
            <a href="home.php" class="text-nav">PÁGINA INICIAL &nbsp;&nbsp;|</a>
            <a href="mural_eventos.php" class="text-nav">MURAL DE EVENTOS &nbsp;&nbsp;|</a>
            <a href="cadastro_associacao.php" class="text-nav">SEJA UM ASSOCIADO</a>

        </nav>
    </header>

    <main>
        <div class="header">
            <h2>EVENTOS</h2>
        </div>
        <section id="mural-eventos">
            <?php
            while ($linha = mysqli_fetch_assoc($result)) {
                $titulo = $linha['titulo'];
                $descricao = $linha['descricao'];
                $atividade = $linha['atividade'];
                $imagem = $linha['imagem'];
                $comunidade = $linha['comunidade'];
                $data = date_create($linha['data']);
                $data = date_format($data, 'd/m/Y');
                $hora = date_create($linha['hora']);
                $hora = date_format($hora, 'H:i');
                $token = $linha['token'];

                echo "<div id='evento1'>
                        <a href='evento.php?k=$token' class='evento'>
                            <div id = 'imagem'>
                                <img src = 'imagens_eventos/$imagem'>
                            </div>
                            <div id = 'descricao'>
                                <h3>$titulo</h3>
                                <p>Descrição:<br>$descricao
                                <br><br>Atividade:<br>$atividade</p>
                            </div>
                            <div id='dados'>
                                &nbsp; &nbsp; Comunidade: $comunidade &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                Data: $data&nbsp; &nbsp;
                                Hora: $hora
                            </div>
                        </a>
                    </div>";
            }
            ?>

        </section>
    </main>

    <footer></footer>

</body>

</html>