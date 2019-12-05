<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
  $strText = isset($_POST['strText']) ? $_POST['strText'] : 0;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exrcicio 1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Meses</h5>
    <hr class="dividir" /> 
    <br /><br />
    <select name="strText">
          <option value="" disabled>Escolha uma mês:</option>
          <option value="1" <?php echo $strText == 1 ? "selected" : ""; ?>>Janeiro</option>
          <option value="2" <?php echo $strText == 2 ? "selected" : ""; ?>>Fevereiro</option>
          <option value="3" <?php echo $strText == 3 ? "selected" : ""; ?>>Março</option>
          <option value="4" <?php echo $strText == 4 ? "selected" : ""; ?>>Abril</option>
          <option value="5" <?php echo $strText == 5 ? "selected" : ""; ?>>Maio</option>
          <option value="6" <?php echo $strText == 6 ? "selected" : ""; ?>>Junho</option>
          <option value="7" <?php echo $strText == 7 ? "selected" : ""; ?>>Julho</option>
          <option value="8" <?php echo $strText == 8 ? "selected" : ""; ?>>Agosto</option>
          <option value="9" <?php echo $strText == 9 ? "selected" : ""; ?>>Setembro</option>
          <option value="10" <?php echo $strText == 10 ? "selected" : ""; ?>>Outubro</option>
          <option value="11" <?php echo $strText == 11 ? "selected" : ""; ?>>Novembro</option>
          <option value="12" <?php echo $strText == 12 ? "selected" : ""; ?>>Dezembro</option>
    </select>
    <div class="input">
      <input type="submit" value="Enviar Dados" />
      <input type="reset" value="Limpar" />
    </div>
  </form>
</body>

</html>
