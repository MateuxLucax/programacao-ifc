<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $tipo = isset($_POST['tipo'])?$_POST['tipo']:0;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 2</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
  <style type="text/css"> img { width: 200px; } </style>
</head>

<body>
  <form method="post">
    <h5>Jogo de Dados</h5>
    <hr class="dividir" />
    <br />
    <br />
    <select name="tipo">
          <option value="" disabled selected>Escolha quantos dados irá jogar:</option>
          <option value="1" <?php echo $tipo == 1 ? 'selected ' : ''; ?>>1 Dado</option>
          <option value="2" <?php echo $tipo == 2 ? 'selected ' : ''; ?>>2 Dados</option>
    </select>
    <div class="input">
      <input type="submit" value="Enviar Dados" />
      <input type="reset" value="Limpar" />
    </div>
  </form>
  <br />
  <br />
  <br />
  <br />
  <form>
    <h5>Resultado</h5>
    <hr class="dividir" />
    <center>
    <?php
      switch ($tipo) {
        case 1:
          $dado1 = mt_rand(1, 6);
          echo "<h5>Dado 1:</h5>";
          if ($dado1 == 1) {
              echo "<img src='assets/dadinhus/dado (1).png' alt=''>";
          } elseif ($dado1 == 2) {
              echo "<img src='assets/dadinhus/dado (2).png' alt=''>";
          } elseif ($dado1 == 3) {
              echo "<img src='assets/dadinhus/dado (3).png' alt=''>";
          } elseif ($dado1 == 4) {
              echo "<img src='assets/dadinhus/dado (4).png' alt=''>";
          } elseif ($dado1 == 5) {
              echo "<img src='assets/dadinhus/dado (5).png' alt=''>";
          } elseif ($dado1 == 6) {
              echo "<img src='assets/dadinhus/dado (6).png' alt=''>";
          }
          break;
          case 2:
          $dado2 = mt_rand(1, 6);
          $dado1 = mt_rand(1, 6);
          echo "<h5>Dado 1:</h5>";
          if ($dado2 == 1) {
              echo "<img src='assets/dadinhus/dado (1).png' alt=''>";
          } elseif ($dado2 == 2) {
              echo "<img src='assets/dadinhus/dado (2).png' alt=''>";
          } elseif ($dado2 == 3) {
              echo "<img src='assets/dadinhus/dado (3).png' alt=''>";
          } elseif ($dado2 == 4) {
              echo "<img src='assets/dadinhus/dado (4).png' alt=''>";
          } elseif ($dado2 == 5) {
              echo "<img src='assets/dadinhus/dado (5).png' alt=''>";
          } elseif ($dado2 == 6) {
              echo "<img src='assets/dadinhus/dado (6).png' alt=''>";
          }
          echo "<h5>Dado 2:</h5>";
          if ($dado1 == 1) {
              echo "<img src='assets/dadinhus/dado (1).png' alt=''>";
          } elseif ($dado1 == 2) {
              echo "<img src='assets/dadinhus/dado (2).png' alt=''>";
          } elseif ($dado1 == 3) {
              echo "<img src='assets/dadinhus/dado (3).png' alt=''>";
          } elseif ($dado1 == 4) {
              echo "<img src='assets/dadinhus/dado (4).png' alt=''>";
          } elseif ($dado1 == 5) {
              echo "<img src='assets/dadinhus/dado (5).png' alt=''>";
          } elseif ($dado1 == 6) {
              echo "<img src='assets/dadinhus/dado (6).png' alt=''>";
          }
            break;
          }
  ?>
  </center>
  </form>
</body>

</html>