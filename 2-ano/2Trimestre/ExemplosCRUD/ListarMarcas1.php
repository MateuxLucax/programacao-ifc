<!DOCTYPE html>
<html lang="pt-BR">

<?php  
  $busca = isset($_POST['busca'])?$_POST['busca']:1;
  require 'connect/connect.php';
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
    <h5>Marcas de celulares</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="text" name="busca" value="<?php echo $busca; ?>" />
      <label>Marca de Celular</label>
    </div>
    <div class="input">
      <input type="submit" value="Pesquisar" />
      <input type="reset" value="Limpar" />
    </div>
    </form>
    <form>
    <br /><br /><br />
    <h5>Resultados</h5>
    <hr class="dividir" />
    <?php 
      $sql = 'SELECT * FROM '. $tabelaMarca. " WHERE descricao LIKE '%". $busca."%' ORDER BY codigo";
      $resultado = mysqli_query($conexao, $sql);
    ?>
    <br />
    <table>
      <thead>
        <tr>
          <th scope="col">Código</th>
          <th scope="col">Descrição</th>
        </tr>
      </thead>
      <?php
        while ($row = mysqli_fetch_array($resultado)) {
          echo "<tr><td>".$row['codigo']."</td>";
          echo "<td>".$row['descricao']."</td></tr>";
        }
      ?>
    </table>
  </form>
</body>

</html>
