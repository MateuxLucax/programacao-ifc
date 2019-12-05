<!DOCTYPE html>
<html lang="pt-BR">

<?php 
  require 'connect/connect.php';
  $pesquisa = isset($_POST['pesquisa'])?$_POST['pesquisa']:'';
  $radio = isset($_POST['radio'])?$_POST['radio']:'codigo';
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercicio 3</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>Vendedores</h5>
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
      <input id="2" type="radio" name="radio" value="login" <?php echo $radio == 'login' ? 'checked ' : ' '; ?>/>
      <label for="2">Login</label>
    </div>
    <div class="radio radio-inline">
      <input id="3" type="radio" name="radio" value="senha" <?php echo $radio == 'senha' ? 'checked ' : ' '; ?>/>
      <label for="3">Senha</label>
    </div>
    <div class="radio radio-inline">
      <input id="4" type="radio" name="radio" value="nome" <?php echo $radio == 'nome' ? 'checked ' : ' '; ?>/>
      <label for="4">Nome</label>
    </div>
    <div class="radio radio-inline">
      <input id="5" type="radio" name="radio" value="email" <?php echo $radio == 'email' ? 'checked ' : ' '; ?>/>
      <label for="5">E-Mail</label>
    </div>
    <div class="radio radio-inline">
      <input id="6" type="radio" name="radio" value="telefone" <?php echo $radio == 'telefone' ? 'checked ' : ' '; ?>/>
      <label for="6">Telefone</label>
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
        <th scope="col">Login</th>
        <th scope="col">Senha</th>
        <th scope="col">Nome</th>
        <th scope="col">E-Mail</th>
        <th scope="col">Telefone</th>
      </thead>
      <?php 
        if ($radio == 'codigo') {
          if ($pesquisa == '') {
            $pesquisa = '';
          } else {
            $pesquisa = ' where '. $radio.' = '. $pesquisa. ' order by '.$radio;
          }
          $sql = 'select * from '. $tb_vendedor. $pesquisa;
        } elseif ($radio == 'login') {
          $sql = 'select * from '. $tb_vendedor. ' where '. $radio.' like "'. $pesquisa. '%" order by '.$radio;
        } elseif ($radio == 'senha') {
          $sql = 'select * from '. $tb_vendedor. ' where '. $radio.' like "'. $pesquisa. '%" order by '.$radio;
        } elseif ($radio == 'nome') {
          $sql = 'select * from '. $tb_vendedor. ' where '. $radio.' like "'. $pesquisa. '%" order by '.$radio;
        } elseif ($radio == 'email') {
          $sql = 'select * from '. $tb_vendedor. ' where '. $radio.' like "'. $pesquisa. '%" order by '.$radio;
        } elseif ($radio == 'telefone') {
          $sql = 'select * from '. $tb_vendedor. ' where '. $radio.' like "'. $pesquisa. '%" order by '.$radio;
        }
        $resultado = mysqli_query($conexao, $sql);
        while ($row = mysqli_fetch_array($resultado)) {
          echo '<tr>';
          echo '<td>'. $row['codigo']. '</td>';
          echo '<td>'. $row['login']. '</td>';
          echo '<td>'. $row['senha']. '</td>';
          echo '<td>'. $row['nome']. '</td>';
          echo '<td>'. $row['email']. '</td>';
          echo '<td>'. $row['telefone']. '</td>';
          echo '</tr>';
        }
      ?>
    </table>
</body>

</html>
