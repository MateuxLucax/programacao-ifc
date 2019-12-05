<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
  include_once 'cilindro.class.php';
  $cilindro = new cilindro;
  $cilindro->setRaio(isset($_POST['r'])?$_POST['r']:0);
  $cilindro->setAltura(isset($_POST['h'])?$_POST['h']:0);
  $cilindro->setNivelSeguranca(isset($_POST['n'])?$_POST['n']:1);
  $pi = 3.14;
?>

<head>
  <meta charset="UTF-8" />
  <title>Cilindros</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Cilindro</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="r" id="r" value="<?php echo $cilindro->getRaio(); ?>" required step="0.01" />
      <label for="r">Raio:</label>
    </div>
    <div class="input">
      <input type="number" name="h" id="h" value="<?php echo $cilindro->getAltura(); ?>" required step="0.01" />
      <label for="h">Altura:</label>
    </div>
    <center>
    <h4>Nível de Segurança</h4>
    <div class="radio radio-inline">
      <input id="1" type="radio" name="n" value="1" <?php echo ($cilindro->getNivelSeguranca() == 1)?'checked':'' ?> />
      <label for="1">Baixo</label>
    </div>
    <div class="radio radio-inline">
      <input id="2" type="radio" name="n" value="2" <?php echo ($cilindro->getNivelSeguranca() == 2)?'checked':'' ?> />
      <label for="2">Médio</label>
    </div>
    <div class="radio radio-inline">
      <input id="3" type="radio" name="n" value="3" <?php echo ($cilindro->getNivelSeguranca() == 3)?'checked':'' ?> />
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
    <style type="text/css">
  		.resultado {
  			color: <?php echo $cilindro->corTexto($cilindro->getNivelSeguranca()) ?>;
  		}
  	</style>
  	<br />
  	<br />
    <center><?php echo $cilindro->imagem($cilindro->getNivelSeguranca()); ?><br /><h5 class="resultado"><?php echo $cilindro->nivelSegurancaTexto($cilindro->getNivelSeguranca()); ?></h5></center>
    <ul class="resultado">
    	<li class="resultado"><?php echo "Raio de ".number_format($cilindro->getRaio(),2,',','.')."<small>m</small> e Altura de ".number_format($cilindro->getAltura(),2,',','.')."<small>m</small>"; ?></li>
    	<li class="resultado"><?php echo "Área total: ".number_format($cilindro->areaTotal(),2,',','.')."<small>m</small>²"; ?></li>
    	<li class="resultado"><?php echo "Litros: ".number_format($cilindro->litros(),2,',','.')."l"; ?></li>
    	<li class="resultado"><?php echo "Você vai utilizar: ".$cilindro->latas()." latas"; ?></li>
    	<li class="resultado"><?php echo "Você vai gastar: R$".number_format($cilindro->custoTotal(),2,',','.'); ?></li>
    </ul>
  </form>
</body>

</html>
