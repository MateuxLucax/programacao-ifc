<!DOCTYPE html>
<html lang="pt-BR">

<?php 
  require 'connect/connect.php';
  $pesquisa = isset($_POST['pesquisa'])?$_POST['pesquisa']:'';
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 11</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Jogos</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="text" name="pesquisa" value="<?php echo $pesquisa; ?>" />
      <label>Ano de Lançamento</label>
    </div>
    <div class="input">
      <input type="submit" value="Pesquisar" />
      <input type="reset" value="Limpar" />
    </div>
    </form>
    <form>
    <br /><br /><br />
    <hr class="dividir" />
    <br />
    <table>
      <thead>
        <th scope="col">Código</th>
        <th scope="col">Ano de Lançamento</th>
        <th scope="col">Classificação</th>
      </thead>
      <?php 
        $sql = 'select * from '. $tb_jogo. ' where anoDeLancamento like "'. $pesquisa. '%" order by codigo';
        $resultado = mysqli_query($conexao, $sql);
        while ($row = mysqli_fetch_array($resultado)) {
          echo '<tr>';
          echo '<td>'. $row['codigo']. '</td>';
          echo '<td>'. $row['anoDeLancamento']. '</td>';
          echo '<td>'. $row['classificacao']. '</td>';
          echo '</tr>';
        }
      ?>
    </table>
  </form>
</body>

</html>
