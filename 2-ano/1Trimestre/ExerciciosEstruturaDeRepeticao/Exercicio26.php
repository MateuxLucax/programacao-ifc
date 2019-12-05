<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
	$numIni = isset($_POST['ni'])?$_POST['ni']:1;
  $numFi = isset($_POST['nf'])?$_POST['nf']:7;
  $divisores = 0;
?>


<head>
  <meta charset="UTF-8" />
  <title>Exercício 26</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form>
    <h5>Panificadora Pão de Ontem - Tabela de preços</h5>
    <hr class="dividir" />
    <h4>Preço do pão: R$ 0.18</h4>
    <ul>
    <?php 
      for ($i = 1; $i <= 50 ; $i++) { 
        echo "<li>". $i. " - R$". ($i * 0.18). "</li>";
      }
    ?>
    </ul>
  </form>
</body>

</html>
