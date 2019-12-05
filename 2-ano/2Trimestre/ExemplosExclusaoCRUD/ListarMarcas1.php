<!DOCTYPE html>
<html lang="pt-BR">

<?php  
  $pesquisa = isset($_POST['pesquisa'])?$_POST['pesquisa']:'';
  $radio = isset($_POST['radio'])?$_POST['radio']:'codigo';
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
      <input type="text" name="pesquisa" value="<?php echo $pesquisa; ?>" />
      <label>Pesquisar</label>
    </div>
    <center>
    <div class="radio radio-inline">
      <input id="1" type="radio" name="radio" value="codigo" <?php echo $radio == 'codigo' ? 'checked ' : ' '; ?>/>
      <label for="1">Código</label>
    </div>
    <div class="radio radio-inline">
      <input id="2" type="radio" name="radio" value="descricao" <?php echo $radio == 'descricao' ? 'checked ' : ' '; ?>/>
      <label for="2">Descrição</label>
    </div>
    </center>
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
      if ($radio == 'codigo') {
          if ($pesquisa == '') {
            $pesquisa = '';
          } else {
            $pesquisa = ' where '. $radio.' = '. $pesquisa. ' order by '.$radio;
          }
          $sql = 'select * from '. $tabelaMarca. $pesquisa;
        } elseif ($radio == 'descricao') {
          $sql = 'select * from '. $tabelaMarca. ' where '. $radio.' like "'. $pesquisa. '%" order by '.$radio;
        }
      $resultado = mysqli_query($conexao, $sql);
    ?>
    <br />
    <table>
      <thead>
        <tr>
          <th scope="col">Código</th>
          <th scope="col">Descrição</th>
          <th scope="col">Exclusão</th>
        </tr>
      </thead>
      <?php
        while ($row = mysqli_fetch_array($resultado)) {
          echo "<tr><td>".$row['codigo']."</td>";
          echo "<td>".$row['descricao']."</td>";
          echo '<td><a href="acaoMarca.php?acao=excluir&codigo='.$row['codigo']. '">Excluir</a></td></tr>';
        }
      ?>
    </table>
  </form>
</body>

</html>
