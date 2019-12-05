<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $num = isset($_POST['n'])?$_POST['n']:1;
?>
																											
<head>
  <meta charset="UTF-8" />
  <title>Exercicio 2</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Descubra o Dia da Semana</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="n" id="n"/>
      <label for="n">Número do Dia da Semana</label>
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
    	switch ($num) {
    		case 1:
    			$dia = "Domingo";
    			break;
    		case 2:
    			$dia = "Segunda";
    			break;
    		case 3:
    			$dia = "Terça";
    			break;
    		case 4:
    			$dia = "Quarta";
    			break;
    		case 5:
    			$dia = "Quinta";
    			break;
    		case 6:
    			$dia = "Sexta";
    			break;
    		case 7:
    			$dia = "Sábado";
    			break;
    		default:
    			$dia = "Valor Inválido";
    			break;
    	}
    ?>
    <h1><?php echo $dia; ?></h1>
  </form>
</body>

</html>
