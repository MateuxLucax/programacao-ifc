<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $n1 = isset($_POST['n1'])?$_POST['n1']:100;
  $n2 = isset($_POST['n2'])?$_POST['n2']:100;
  $n3 = isset($_POST['n3'])?$_POST['n3']:100;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 4</title>
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
    <h5>Resíduos Químicos</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="n1" id="n1" value="<?php echo $n1; ?>" />
      <label for="n1">Número 1</label>
    </div>
    <div class="input">
      <input type="number" name="n2" id="n2" value="<?php echo $n2; ?>" />
      <label for="n2">Número 2</label>
    </div>
    <div class="input">
      <input type="number" name="n3" id="n3" value="<?php echo $n3; ?>" />
      <label for="n3">Número 3</label>
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
    	if ($n1 == $n2 && $n1 == $n3) {
    		$resultado = "Não existe contaminação<br ><br /><img src='assets/cont/3.png'";
    	} elseif ($n1 < $n2 && $n2 < $n3) {
    		$resultado = "Contaminação acima dos limites permitidos<br /><br /><img src='assets/cont/1.png'";
    	} elseif ($n1 > $n2 && $n2 > $n3) {
    		$resultado = "Contaminação abaixo dos limites permitidos<br /><br /><img src='assets/cont/2.png'";
    	}
    ?>
    <h5><?php echo $resultado; ?></h5>
    </center>
  </form>
</body>

</html>
