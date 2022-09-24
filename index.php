<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <title>Curos PHP 7 - Completo</title>
</head>

<body>
    <header class="cabecalho">
        <h1>
            Curso PHP
        </h1>
        <h2>
            Lista de atividades
        </h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Módulo 01</h3>
                    <ul>
                        <li>
                            <a href="exercicios.php?dir=1.basico&file=1.1ola">Olá PHP</a>
                        </li>
                        <li>
                            <a href="exercicios.php?dir=1.basico&file=1.2html">Integração HTML</a>
                        </li>
                        <li>
                            <a href="exercicios.php?dir=1.basico&file=1.3css">Integração CSS</a>
                        </li>
                        <li>
                            <a href="exercicios.php?dir=1.basico&file=1.4comentarios">Comentários PHP</a>
                        </li>
                        <li>
                            <a href="exercicios.php?dir=1.basico&file=1.5desafio">Desafio</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('M-Y'); ?>
    </footer>
</body>

</html>