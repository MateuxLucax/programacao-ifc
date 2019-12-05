<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
  $nome = isset($_POST['n'])?$_POST['n']:"Pedro";
  $idade = isset($_POST['i'])?$_POST['i']:30;
  $salario = isset($_POST['s'])?$_POST['s']:5000;
  $sexo = strtolower(isset($_POST['se'])?$_POST['se']:"f");
  $estado = strtolower(isset($_POST['e'])?$_POST['e']:"c");
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercício 4</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Validação  de Informações</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="text" name="n" id="n" value="<?php echo $nome; ?>" required />
      <label for="n">Nome</label>
    </div>
    <div class="input">
      <input type="number" name="i" id="i" value="<?php echo $idade; ?>" required />
      <label for="i">Idade</label>
    </div>
    <div class="input">
      <input type="number" name="s" id="s" value="<?php echo $salario; ?>" required />
      <label for="s">Salário</label>
    </div>
    <div class="input">
      <input type="text" name="se" id="se" value="<?php echo $sexo; ?>" required />
      <label for="se">Sexo</label>
    </div>
    <div class="input">
      <input type="text" name="e" id="e" value="<?php echo $estado; ?>" required />
      <label for="e">Estado Cívil</label>
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
    <h5>Mensagem</h5>
    <hr class="dividir" />
    <?php
      $numNome = strlen($nome);
      if ($numNome > 3) {
        $respNome = "Válido";
      } else {
        $respNome = "Inválido";
      }
      if ($idade >= 0 && $idade <= 150) {
        $respIdade = "Válido";
      } else {
        $respIdade = "Inválido";
      }
      if ($salario > 0) {
        $respSalario = "Válido";
      } else {
        $respSalario = "Inválido";
      }
      if ($sexo == "f" || $sexo == "m") {
        $respSexo = "Válido";
      } else {
        $respSexo = "Inválido";
      }
      if ($estado == "s" || $estado == "c" || $estado == "v" || $estado == "d") {
        $respEstado = "Válido";
      } else {
        $respEstado = "Inválido";
      }
    ?>
    <br />
    <h5>Nome: <?php echo $respNome; ?></h5>
    <h5>Idade: <?php echo $respIdade; ?></h5>
    <h5>Salário: <?php echo $respSalario; ?></h5>
    <h5>Sexo: <?php echo $respSexo; ?></h5>
    <h5>Estado: <?php echo $respEstado; ?></h5>
  </form>
</body>

</html>
