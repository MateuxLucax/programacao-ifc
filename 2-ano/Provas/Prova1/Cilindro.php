<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
  $raio = isset($_POST['r'])?$_POST['r']:0;
  $altura = isset($_POST['h'])?$_POST['h']:0;
  $nivelSeguranca = isset($_POST['n'])?$_POST['n']:1;
  $pi = 3.14;
?>

<head>
  <meta charset="UTF-8" />
  <title>Cilindros</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
  <style type="text/css"> .cilindros { height: 100px; } </style>
</head>

<body>
  <form method="post">
    <h5>Cilindro</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="r" id="r" value="<?php echo $raio; ?>" required step="0.01" />
      <label for="r">Raio:</label>
    </div>
    <div class="input">
      <input type="number" name="h" id="h" value="<?php echo $altura; ?>" required step="0.01" />
      <label for="h">Altura:</label>
    </div>
    <center>
    <h4>Nível de Segurança</h4>
    <div class="radio radio-inline">
      <input id="1" type="radio" name="n" value="1" <?php echo ($nivelSeguranca == 1)?'checked':'' ?> />
      <label for="1">Baixo</label>
    </div>
    <div class="radio radio-inline">
      <input id="2" type="radio" name="n" value="2" <?php echo ($nivelSeguranca == 2)?'checked':'' ?> />
      <label for="2">Médio</label>
    </div>
    <div class="radio radio-inline">
      <input id="3" type="radio" name="n" value="3" <?php echo ($nivelSeguranca == 3)?'checked':'' ?> />
      <label for="3">Alto</label>
    </div>
	</center>
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
  	 	if ($nivelSeguranca == 1) {
  	  	$precoLata = 342.49;
  	  	$corTexto = "#ff2a2a";
  	  	$imagem = "<img src='assets/images/NivelBaixo.png' class='cilindros' />";
  	  	$nivelSegurancaTexto = "Nível Baixo";
  	  } elseif ($nivelSeguranca == 2) {
  	  	$precoLata = 479.27;
  	  	$corTexto = "orange";
  	  	$imagem = "<img src='assets/images/NivelMedio.png' class='cilindros' />";
  	  	$nivelSegurancaTexto = "Nível Médio";
  	  } elseif ($nivelSeguranca == 3) {
  	  	$precoLata = 623.54;
  	  	$corTexto = "green";
  	  	$imagem = "<img src='assets/images/NivelAlto.png' class='cilindros' />";
  	  	$nivelSegurancaTexto = "Nível Alto";
  	  } else {
  	  	$precoLata = 0;
  	  	echo "<h5>Erro! Nível de segurança não indentificado</h5>";
  	  }
  	  $areaCirculo = $pi * pow($raio, 2);
  	  $circunferenciaCirculo = 2 * $pi * $raio;
  	  $areaCilindro = $altura * $circunferenciaCirculo;
  	  $areaTotal = ($areaCirculo * 3) + ($areaCilindro * 2);
  	  $litros = $areaTotal * 4;
  	  $latas = ceil($litros / 100);
  	  $custoTotal = $precoLata * $latas;
  	?>
    <style type="text/css">
  		.resultado {
  			color: <?php echo $corTexto ?>;
  			font-weight: 800;
  			text-transform: uppercase;
  		}
  	</style>
  	<br />
  	<br />
    <center><?php echo $imagem; ?><br /><h5 class="resultado"><?php echo $nivelSegurancaTexto; ?></h5></center>
    <ul class="resultado">
    	<li class="resultado"><?php echo "Raio de ".number_format($raio,2,',','.')."<small>m</small> e Altura de ".number_format($altura,2,',','.')."<small>m</small>"; ?></li>
    	<li class="resultado"><?php echo "Área total: ".number_format($areaTotal,2,',','.')."<small>m</small>²"; ?></li>
    	<li class="resultado"><?php echo "Litros: ".number_format($litros,2,',','.')."l"; ?></li>
    	<li class="resultado"><?php echo "Você vai utilizar: ".$latas." latas"; ?></li>
    	<li class="resultado"><?php echo "Você vai gastar: R$".number_format($custoTotal,2,',','.'); ?></li>
    </ul>
  </form>
</body>

</html>
