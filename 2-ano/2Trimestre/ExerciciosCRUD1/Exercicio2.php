<!DOCTYPE html>
<html lang="pt-BR">

<?php 
  require 'connect/connect.php';
  $pesquisa = isset($_POST['pesquisa'])?$_POST['pesquisa']:'';
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 2</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Clientes</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="text" name="pesquisa" value="<?php echo $pesquisa; ?>" />
      <label>Nome do cliente</label>
    </div>
    <div class="input">
      <input type="submit" value="Pesquisar" />
      <input type="reset" value="Limpar" />
    </div>
    </form>
    <form>
    <br /><br /><br /><br />
    <hr class="dividir" />
  </form>
    <table>
      <thead>
        <th scope="col">Código</th>
        <th scope="col">Nome</th>
        <th scope="col">E-Mail</th>
        <th scope="col">Telefone</th>
      </thead>
      <?php 
        $sql = 'select * from '. $tb_cliente. ' where nome like "'. $pesquisa. '%" order by codigo';
        $resultado = mysqli_query($conexao, $sql);
        while ($row = mysqli_fetch_array($resultado)) {
          echo '<tr>';
          echo '<td>'. $row['codigo']. '</td>';
          echo '<td>'. $row['nome']. '</td>';
          echo '<td>'. $row['email']. '</td>';
          echo '<td>'. $row['telefone']. '</td>';
          echo '</tr>';
        }
      ?>
    </table>
</body>

</html>
