<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
	$nota = isset($_POST['n'])?$_POST['n']:5;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercício 1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
	<form method="post">
    <h5>Notas</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="n" id="n" value="<?php echo $nota; ?>" required />
      <label for="n">Nota</label>
    </div>
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
    <h5>Resposta</h5>
    <hr class="dividir" />
    <?php
    	if ($nota < 0 || $nota >= 10) {
    		$resultado = "Nota Inválida, digite novamente";
    	} elseif ($nota > 0 && $nota <= 10) {
    		$resultado = "Nota Correta";
    	} else {
        $resultado = "AZEDO A MARMITA";
      }
    ?>
    <br />
    <h5><?php echo $resultado; ?></h5>
  </form>
</body>

</html>
