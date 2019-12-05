<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $codigo = isset($_POST['n'])?$_POST['n']:1;
  $preco = isset($_POST['p'])?$_POST['p']:100;
?>
																											
<head>
  <meta charset="UTF-8" />
  <title>Exercicio 3</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Envio de Produtos</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="n" id="n"/>
      <label for="n">Código</label>
    </div>
    <div class="input">
      <input type="number" name="p" id="p"/>
      <label for="p">Preço</label>
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
    	switch ($codigo) {
    		case 1:
    			$regiao = "Sul";
    			break;
    		case 2:
    			$regiao = "Norte";
    			break;
    		case 3:
    			$regiao = "Leste";
    			break;
    		case 4:
    			$regiao = "Oeste";
    			break;
    		case 5:
    			$regiao = "Nordeste";
    			break;
    		case 6:
    			$regiao = "Nordeste";
    			break;
    		case 7:
    			$regiao = "Centro-Oeste";
    			break;
    		case 8:
    			$regiao = "Centro-Oeste";
    			break;
    		default:
    			$dia = "Valor Inválido";
    			break;
    	}
    ?>
    <h1><?php echo "Com o código ".$codigo." o lugar a ser enviado será ".$regiao." com um custo de R$".number_format($preco,2,",","."); ?></h1>
  </form>
</body>

</html>
