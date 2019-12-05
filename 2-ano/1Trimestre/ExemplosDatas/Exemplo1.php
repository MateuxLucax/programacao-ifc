<!DOCTYPE html>
<html lang="pt-BR">

<?php 
  $data = isset($_POST['data'])?str_replace("/", "-", $_POST['data']):"24-04-1978";
?>

<head>
  <meta charset="UTF-8" />
  <title>Exemplo 1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Exemplo 1</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="text" placeholder="Informe a data(dd/mm/aaaa)" name="data" value="<?php echo date("d/m/Y", strtotime($data));?>" />
      <label>Data</label>
    </div>
    <div class="input">
      <input type="submit" value="Enviar Dados" />
      <input type="reset" value="Limpar" />
    </div>
    </form>
    <form>
    <br /><br /><br />
    <h5>Data</h5>
    <hr class="dividir" />
    <p>
    <center>
    <?php 
      echo $data;
      echo "<br />";
      echo date("Y-m-d", strtotime($data));
      echo "<br />";
      echo date("d-m-Y", strtotime($data));
      echo "<br /><br />";
      echo date("d", strtotime($data)). " | Dia";
      echo "<br />";
      echo date("F", strtotime($data)). " | Mês";
      echo "<br /><br />";
      echo date("M", strtotime($data)). " | Mês";
      echo "<br /><br />";
      echo date("n", strtotime($data)). " | Mês (1 - Janeiro, ...)";
      echo "<br /><br />";
      echo date("y", strtotime($data)). " | Ano";
      echo "<br /><br />";
      echo date("Y", strtotime($data)). " | Ano";
      echo "<br /><br />";
      echo date("l", strtotime($data)). " | Dia da semana";
      echo "<br /><br />";
      echo date("D", strtotime($data)). " | Dia da semana";
      echo "<br /><br />";
      echo date("N", strtotime($data)). " | Dia da semana (1 - Segunda, ...)";
      echo "<br /><br />";
      echo date("z", strtotime($data)). " | Dia do ano (começa em zero)";
    ?>  
    </center>
    </p>
  </form>
</body>

</html>
