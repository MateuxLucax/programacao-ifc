<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notas Musicais</title>
    <style>
        * {
            font-size: 16px;
            font-family: 'Bariol';
            background: #F5F5F5;
        }
        
        h1 {
            font-size: 3rem;
            text-align: center;
            background: linear-gradient(to right, #5FF442, #389127);
            -webkit-background-clip: text;
            color: transparent;
        }
    </style>
</head>
<body>
    <?php

    include_once "autoload.php";

    $nota1 = new Nota('A');
    $nota2 = new Nota('B');

    $musica = new Musica(array($nota1, $nota2));
    echo '<h1>'. $musica. '</h1>';
    echo '<h1>'. $musica->tonalidade(0.5). '</h1>';

    ?>
</body>
</html>