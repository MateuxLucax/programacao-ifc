<!DOCTYPE html>
<html lang="pt-BR">

<?php 
  require 'connect/connect.php';
  $pesquisa = isset($_POST['pesquisa'])?$_POST['pesquisa']:'';
  $radio = isset($_POST['radio'])?$_POST['radio']:'codigo';
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 6</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Países</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="text" name="pesquisa" value="<?php echo $pesquisa; ?>" />
      <label>Pesquisa</label>
    </div>
    <center>
    <div class="radio radio-inline">
      <input id="1" type="radio" name="radio" value="codigo" <?php echo $radio == 'codigo' ? 'checked ' : ' '; ?>/>
      <label for="1">Código</label>
    </div>
    <div class="radio radio-inline">
      <input id="2" type="radio" name="radio" value="nome" <?php echo $radio == 'nome' ? 'checked ' : ' '; ?>/>
      <label for="2">Nome</label>
    </div>
    <div class="radio radio-inline">
      <input id="3" type="radio" name="radio" value="sigla" <?php echo $radio == 'sigla' ? 'checked ' : ' '; ?>/>
      <label for="3">Sigla</label>
    </div>
    <div class="radio radio-inline">
      <input id="4" type="radio" name="radio" value="continente" <?php echo $radio == 'continente' ? 'checked ' : ' '; ?>/>
      <label for="4">Continente</label>
    </div>
    </center>
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
        <th scope="col">Sigla</th>
        <th scope="col">Continente</th>
        <th scope="col">Exclusão</th>
      </thead>
      <?php 
        if ($radio == 'codigo') {
          if ($pesquisa == '') {
            $pesquisa = '';
          } else {
            $pesquisa = ' where '. $radio.' = '. $pesquisa. ' order by '.$radio;
          }
          $sql = 'select * from '. $tb_paises. $pesquisa;
        } elseif ($radio == 'nome') {
          $sql = 'select * from '. $tb_paises. ' where '. $radio.' like "'. $pesquisa. '%" order by '.$radio;
        } elseif ($radio == 'sigla') {
          $sql = 'select * from '. $tb_paises. ' where '. $radio.' like "'. $pesquisa. '%" order by '.$radio;
        } elseif ($radio == 'continente') {
          $sql = 'select * from '. $tb_paises. ' where '. $radio.' like "'. $pesquisa. '%" order by '.$radio;
        }
        $resultado = mysqli_query($conexao, $sql);
        while ($row = mysqli_fetch_array($resultado)) {
          echo '<tr>';
          echo '<td>'. $row['codigo']. '</td>';
          echo '<td>'. $row['nome']. '</td>';
          echo '<td>'. $row['sigla']. '</td>';
          echo '<td>'. $row['continente']. '</td>';
          echo '<td><a href="exclusao.php?acao=excluir&codigo='.$row[0]. '&tabela='. $tb_paises. '&url=Exercicio6">Excluir</a></td></tr>';
          echo '</tr>';
        }
      ?>
    </table>
</body>

</html>
