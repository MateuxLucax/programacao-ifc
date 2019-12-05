<!DOCTYPE html>
<html lang="pt-BR" />
<?php
  $numero1 = isset($_POST['n1'])?$_POST['n1']:100;
  $numero2 = isset($_POST['n2'])?$_POST['n2']:100;
  $operacao = isset($_POST['op'])?$_POST['op']:1;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 16</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Calculadora</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="n1" id="n1" step="0.01" />
      <label for="n1">Número 1</label>
    </div>
    <div class="input">
      <input type="number" name="n2" id="n2" step="0.01" />
      <label for="n2">Número 2</label>
    </div>
    <select name="op" id="op">
          <option value="0" disabled selected>Escolha uma operação:</option>
          <option value="1">Adição</option>
          <option value="2">Subtração</option>
          <option value="3">Divisão</option>
          <option value="4">Multiplicação</option>
    </select>
    <br />
    <br />
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
    <?php
      if ($operacao == 1) {
        $resultado = $numero1 + $numero2;
        $resposta = "A soma de $numero1 + $numero2 = $resultado";
      } elseif ($operacao == 2) {
        $resultado = $numero1 - $numero2;
        $resposta= "A subtração de $numero1 - $numero2 = $resultado";
      } elseif ($operacao == 4) {
        $resultado = $numero1 * $numero2;
        $resposta = "A multipliçação de $numero1 x $numero2 = $resultado";
      } elseif ($operacao == 3) {
        $resultado = $numero1 / $numero2;
        $resposta = "A divisão de $numero1 ÷ $numero2 = $resultado";
      }
    ?>
    <h5><?php echo $resposta; ?></h5>
    <ul>
      <?php 
        if (is_float($resultado)) {
        echo "<li>$resultado é decimal</li>";
      } else {
        echo "<li>$resultado é inteiro</li>";
      }
      if ($resultado % 2 == 0) {
        echo "<li>$resultado é par<li>";
      } else {
        echo "<li>$resultado é impar</li>";
      }
      if ($resultado > 0) {
        echo "<li>$resultado é positivo</li>";
      } elseif ($resultado < 0) {
        echo "<li>$resultado é negativo</li>";
      } else {
        echo "<li>$resultado é neutro</li>";
      }
      ?>
    </ul>
  </form>
</body>

</html>
