<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
	$num = isset($_POST['n'])?$_POST['n']:3;
  $divisores = 0;
  $i = 1;
?>


<head>
  <meta charset="UTF-8" />
  <title>Exercício 17</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
	<form method="post">
    <h5>Saber se é primo</h5>
    <hr class="dividir" />
    <div class="input">
        <input type="number" name="n" id="n" required />
         <label for="n">Número</label>
      </div>
    <div class="input">
      <input type="submit" value="Enviar Dados" />
      <input type="reset" value="Limpar" />
    </div>
  </form>
  <br />
  <br />
  <?php 
    while ($i <= $num) {
      if ($num % $i == 0) {
        $divisores = $divisores + 1;
      }
      $i = $i + 1;
    }
    if ($divisores == 2) {
      $resposta = "É primo";
    } else {
      $resposta = "Não é primo";
    }
  ?>
  <br />
  <br />
  <form>
    <h5>Resultado</h5>
    <hr class="dividir" />
    <h5><?php echo $resposta; ?></h5>
  </form>
</body>

</html>
