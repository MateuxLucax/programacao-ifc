<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <title>Exemplo 1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Exemplo de Função</h5>
    <hr class="dividir" />
    <h5>
      <?php
        header('Content-Type: text/html; charset=UTF-8');

        mensagem();

        function mensagem(){
          echo "Mensagem dentro da função";
        }
      ?>
    </h5>
  </form>
</body>

</html>
