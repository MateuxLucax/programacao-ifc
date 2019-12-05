<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $saque = isset($_POST['n'])?$_POST['n']:100;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 3</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
  <style type="text/css">
  	img {
  		width: 250px;
  	}
  </style>
</head>

<body>
  <form method="post">
    <h5>Saque de Dinheiro</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="n" id="n" min="1" value="<?php echo $saque; ?>" />
      <label for="n">Saque</label>
    </div>
    <div>
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
    <br />
    <center>
    <?php
    if ($saque >= 5 && $saque <= 1000) {
      if ($saque >= 100) {
        $nota100 = floor($saque / 100);
        $saque = $saque % 100;
        echo "<h5>$nota100 Cédula(s) de: </h5><img src='assets/notas/100Reais.jpg'><br /><br />";
      }
      if ($saque >= 50) {
        $nota50 = floor($saque / 50);
        $saque = $saque % 50;
        echo "<h5>$nota50 Cédula(s) de: </h5><img src='assets/notas/50Reais.png'><br /><br />";
      }
      if ($saque >= 20) {
      	$nota20 = floor($saque/20);
      	$saque = $saque % 20;
        echo "<h5>$nota20 Cédula(s) de: </h5><img src='assets/notas/20reais.jpg'><br /><br />";
      }
      if ($saque >= 10) {
        $nota10 = floor($saque / 10);
        $saque = $saque % 10;
        echo "<h5>$nota10 Cédula(s) de: </h5><img src='assets/notas/10Reais.jpg'><br /><br />";
      }
      if ($saque >= 5) {
        $nota5 = floor($saque / 5);
        $saque = $saque % 5;
        echo "<h5>$nota5 Cédula(s) de: </h5><img src='assets/notas/5Reais.jpg'><br /><br />";
      }
      if ($saque >= 1) {
        $nota1 = floor($saque / 1);
        echo "<h5>$nota1 Cédula(s) de: </h5><img src='assets/notas/1Real.jpg'><br /><br />";
      }
    } else {
    	echo "<h5>Valor indisponível.</h5>";
    }
    ?>
    </center>
  </form>
</body>

</html>
