<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
	$valorDivida = isset($_POST['v'])?$_POST['v']:3000;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercício 33</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
	<form method="post">
    <h5>Tabela de Dívida</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="v" id="v" value="<?php echo $valorDivida; ?>" required />
      <label for="v">Valor da Dívida</label>
    </div>
   <div class="input">
      <input type="submit" value="Enviar Dados" />
      <input type="reset" value="Limpar" />
    </div>
  </form>
  <br />
  <br />
  <br />
  <form>
    <h5>Tabela</h5>
    <hr class="dividir" />
    <?php
      $valor3 = $valorDivida + ($valorDivida * 0.1);
      $valor6 = $valorDivida + ($valorDivida * 0.15);
      $valor9 = $valorDivida + ($valorDivida * 0.2);
      $valor12 = $valorDivida + ($valorDivida * 0.25);
      $valorJuros3 = $valor3 - $valorDivida;
      $valorJuros6 = $valor6 - $valorDivida;
      $valorJuros9 = $valor9 - $valorDivida;
      $valorJuros12 = $valor12 - $valorDivida;
      $valorParcela3 = $valor3 / 3;
      $valorParcela6 = $valor6 / 6;
      $valorParcela9 = $valor9 / 9;
      $valorParcela12 = $valor12 / 12;
    ?>
    <br />
    <br />
    <table>
      <thead>
        <tr>
          <th scope="col">Valor da Dívida</th>
          <th scope="col">Valor dos Juros</th>
          <th scope="col">Quantidade de Parcelas</th>
          <th scope="col">Valor da Parcela</th>
        </tr>
      </thead>
      <tr>
        <td>R$<?php echo number_format($valorDivida, 2, ',', '.'); ?></td>
        <td>R$0</td>
        <td>1</td>
        <td>R$<?php echo $valorDivida; ?></td>
      </tr>
      <tr>
        <td>R$<?php echo number_format($valor3, 2, ',', '.'); ?></td>
        <td>R$<?php echo number_format($valorJuros3, 2, ',', '.'); ?></td>
        <td>3</td>
        <td>R$<?php echo number_format($valorParcela3, 2, ',', '.'); ?></td>
      </tr>
      <tr>
        <td>R$<?php echo number_format($valor6, 2, ',', '.'); ?></td>
        <td>R$<?php echo number_format($valorJuros6, 2, ',', '.'); ?></td>
        <td>6</td>
        <td>R$<?php echo number_format($valorParcela6, 2, ',', '.'); ?></td>
      </tr>
      <tr>
        <td>R$<?php echo number_format($valor9, 2, ',', '.'); ?></td>
        <td>R$<?php echo number_format($valorJuros9, 2, ',', '.'); ?></td>
        <td>9</td>
        <td>R$<?php echo number_format($valorParcela9, 2, ',', '.'); ?></td>
      </tr>
      <tr>
        <td>R$<?php echo number_format($valor12, 2, ',', '.'); ?></td>
        <td>R$<?php echo number_format($valorJuros12, 2, ',', '.'); ?></td>
        <td>12</td>
        <td>R$<?php echo number_format($valorParcela12, 2, ',', '.'); ?></td>
      </tr>
    </table>
  </form>
</body>

</html>
