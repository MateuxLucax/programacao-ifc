<!DOCTYPE html>
<html lang="pt-BR">

<?php 
  $data = isset($_POST['data'])?str_replace("/", "-", $_POST['data']):"24-04-1978";
?>

<head>
  <meta charset="UTF-8" />
  <title>Exemplo 2</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Exemplo 2</h5>
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
    <h5>
    <center>
    <?php
      setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
      date_default_timezone_set('America/Sao_Paulo');
      echo strftime('%A, %d de %B de %Y', strtotime($data));
    ?>  
    </center>
    </h5>
  </form>
</body>

</html>
