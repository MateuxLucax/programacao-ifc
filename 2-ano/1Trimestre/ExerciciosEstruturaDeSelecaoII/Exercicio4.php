<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $nota1 = isset($_POST['n1'])?$_POST['n1']:7;
  $nota2 = isset($_POST['n2'])?$_POST['n2']:7;
?>
																											
<head>
  <meta charset="UTF-8" />
  <title>Exercicio 4</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Situação do Aluno</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="n1" id="n1"/>
      <label for="n1">Nota 1</label>
    </div>
    <div class="input">
      <input type="number" name="n2" id="n2"/>
      <label for="n2">Nota 2</label>
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
    <h5>Resultado</h5>
    <hr class="dividir" />
    <?php
    	$media = ($nota1 + $nota2) / 2;
    	if ($media >= 0 && $media <= 3) {
    		$situacao = "Reprovado";
    	} elseif ($media > 3 && $media <= 6.9) {
    		$situacao = "Exame";
    	} elseif ($media > 6.9 && $media <= 10) {
    		$situacao = "Aprovado";
    	} else {
    		$situacao = "Média Inválida";
    	}
    ?>
    <h4>Notas</h4>
    <ul>
    	<li><?php echo "Nota 1: ".$nota1; ?></li>
    	<li><?php echo "Nota 2: ".$nota2; ?></li>
    </ul>
    <h4>Média</h4>
    <ul>
      <li><?php echo $media; ?></li>
    </ul>
    <h4>Situação</h4>
    <ul>
    	<li><?php echo $situacao; ?></li>
    </ul>
  </form>
</body>

</html>
