<!DOCTYPE html>
<html lang="pt-br">

<?php
  include 'components/connect/connect.php';
  include 'components/funcoes/funcoes.php';
  $titulo = 'Jogadores';
  $link = '../../index.php#tabela';
  $tabela = $jogadores;
  $pesquisa = isset($_POST['pesquisa'])?$_POST['pesquisa']:'';
  $posicao = isset($_POST['posicao'])?$_POST['posicao']:'nenhum';
  $filtro = isset($_POST['filtro'])?$_POST['filtro']:'nenhum';
  if ($filtro == 'codigo' || $filtro == 'nenhum') {
    if ($pesquisa != '') { $aux = ' where '. $filtro.' = '. $pesquisa. ' order by '.$filtro; }
    $sql = 'select * from '. $tabela. $aux;
  } elseif ($filtro == 'nome' || $filtro == 'salario') {
    $sql = 'select * from '. $tabela. ' where '. $filtro.' like "'. $pesquisa. '%" order by '.$filtro;
  } elseif ($filtro == 'dataNascimento'){
    if ($pesquisa == '') { $sql = 'select * from '. $tabela; }
    else {
      $data = converterDataYmd($pesquisa);
      $sql = 'select * from '. $tabela. ' where '. $filtro. ' like "'.$data .'%" order by '. $filtro. ' desc';
    }
  }
  if ($posicao != 'nenhum') {
    $sql = 'select * from '. $tabela. ' where posicao like "'. $posicao. '%" order by posicao';
  }
  $resultado = mysqli_query($conexao, $sql);
?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>
        <?php echo $titulo; ?>
    </title>
    <link href="components/css/material-icons.css" rel="stylesheet">
    <link rel="icon" href="components/img/favicon.png" type="image/png" />
    <link href="components/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="components/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>

    <!-- Cabeçalho -->
    <header>
        <ul id="nav-mobile" class="sidenav">
            <li><a href="inserir.php">Inserir</a></li>
            <li><a href="../">Projetos</a></li>
        </ul>
        <div class="navbar-fixed">
            <nav class="white" role="navigation">
                <div class="nav-wrapper container">
                    <a id="logo-container" href="index.php" class="brand-logo">
                        <?php echo $titulo ?></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="inserir.php">Inserir</a></li>
                        <li><a href="../">Projetos</a></li>
                    </ul>
                    <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Imagem de fundo -->
    <div class="parallax-container">
        <div class="parallax parallax-image"><img src="components/img/background.jpg"></div>
    </div>

    <!-- Conteúdo -->
    <main>
        <div class="container">
            <div class="section">

                <!-- Pesquisa -->
                <h3 class="center-align">Pesquisar</h3>
                <div>
                    <form method="post">
                        <div class="row">
                            <div class="input-field col m6 s12 l4">
                                <i class="material-icons prefix">search</i>
                                <input id="icon_prefix" type="text" name="pesquisa" value="<?php echo $pesquisa; ?>">
                                <label for="icon_prefix">Pesquisar</label>
                            </div>
                            <div class="input-field col m6 s12 l4">
                                <select name="filtro">
                                    <option value="nenhum" <?php echo $filtro == 'nenhum' ? 'selected ' : '' ; ?>>Escolha uma opção</option>
                                    <option value="nome" <?php echo $filtro == 'nome' ? 'selected ' : '' ; ?>>Nome</option>
                                    <option value="salario" <?php echo $filtro == 'salario' ? 'selected ' : '' ; ?>>Salário</option>
                                    <option value="dataNascimento" <?php echo $filtro == 'dataNascimento' ? 'selected ' : '' ; ?>>Data de nascimento</option>
                                </select>
                                <label>Filtrar</label>
                            </div>
                            <div class="input-field col m6 s12 l4">
                                <select name="posicao">
                                    <option value="nenhum" <?php echo $posicao == 'nenhum' ? 'selected ' : '' ; ?>>Posição do Jogador</option>
                                    <option value="Goleiro" <?php echo $posicao == '' ? 'selected ' : '' ; ?>>Goleiro</option>
                                    <option value="Ala" <?php echo $posicao == 'Ala' ? 'selected ' : '' ; ?>>Ala</option>
                                    <option value="Líbero" <?php echo$posicao == 'Líbero' ? 'selected ' : '' ; ?>>Líbero</option>
                                    <option value="Lateral" <?php echo $posicao == 'Lateral' ? 'selected ' : '' ; ?>>Lateral</option>
                                    <option value="Zagueiro" <?php echo $posicao == 'Zagueiro' ? 'selected ' : '' ; ?>>Zagueiro</option>
                                    <option value="Volante" <?php echo $posicao == 'Volante' ? 'selected ' : '' ; ?>>Volante</option>
                                    <option value="Atacante" <?php echo $posicao == 'Atacante' ? 'selected ' : '' ; ?>>Atacante</option>
                                    <option value="Meia" <?php echo $posicao == 'Meia' ? 'selected ' : '' ; ?>>Meia</option>
                                </select>
                                <label>Posição do Jogador</label>
                            </div>
                            <div class="col s12">
                                <center>
                                    <button class="waves-effect waves-light btn-flat" style="margin-top: 14px;"><i class="material-icons right">send</i>Pesquisar</button>
                                </center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Tabela -->
            <div class="row" id="tabela">
                <h3 class="center-align">Tabela</h3>
                <div>
                    <div class="row">
                        <div class="input-field col s12">
                            <table class="striped responsive-table centered">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Nome</th>
                                        <th>Posição</th>
                                        <th>Salário</th>
                                        <th>Data de nascimento</th>
                                        <th>Clube</th>
                                        <th>Alterar</th>
                                        <th>Excluir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($tupla = mysqli_fetch_array($resultado)) { ?>
                                    <tr 
                                    <?php 
                                        if ($tupla['salario'] <= 1000) {
                                            echo 'class="red-text"';
                                        } elseif ($tupla['salario'] > 1000 && $tupla['salario'] <= 5000) {
                                            echo 'style="color: orange"';
                                        } elseif ($tupla['salario'] > 5000) {
                                            echo 'class="green-text"';
                                        }
                                        ?>>
                                        <td>
                                            <?php echo $tupla['codigo']; ?>
                                        </td>
                                        <td>
                                            <?php echo $tupla['nome']; ?>
                                        </td>
                                        <td>
                                            <?php echo $tupla['posicao']; ?>
                                        </td>
                                        <td>R$
                                            <?php echo number_format($tupla['salario'], 2, ',', '.'); ?>
                                        </td>
                                        <td>
                                            <?php echo converterData($tupla['dataNascimento']); ?>
                                        </td>
                                        <td>
                                            <?php 
                                                $sqlB = 'select * from clube where codigo = '. $tupla['clubeCodigo'];
                                                $resultadoB = mysqli_query($conexao, $sqlB);
                                                while ($tuplaB = mysqli_fetch_array($resultadoB)) {
                                                    echo $tuplaB['nome'];
                                                }
                                            ?>
                                        </td>
                                        <td>
                                          <a class="waves-effect waves-light modal-trigger green-text" href="#alterar<?php echo $tupla['codigo'] ;?>"><i class="material-icons">build</i></a>
                                          <div id="alterar<?php echo $tupla['codigo'] ;?>" class="modal">
                                              <div class="modal-content black-text">
                                                  <center>
                                                      <h4>Alterar</h4>
                                                      <form action="components/funcoes/acao.php" method="post">
                                                          <div class="input-field">
                                                            <input id="nome" type="text" name="nome" value="<?php echo $tupla['nome']; ?>" />
                                                            <label for="nome">Nome</label>
                                                        </div>
                                                        <select name="posicao">
                                                            <option value="0" <?php echo $tupla['posicao'] == '' ? 'selected ' : '' ; ?> disabled>Posição do Jogador</option>
                                                            <option value="Goleiro" <?php echo $tupla['posicao'] == '' ? 'selected ' : '' ; ?>>Goleiro</option>
                                                            <option value="Ala" <?php echo $tupla['posicao'] == 'Ala' ? 'selected ' : '' ; ?>>Ala</option>
                                                            <option value="Líbero" <?php echo $tupla['posicao'] == 'Líbero' ? 'selected ' : '' ; ?>>Líbero</option>
                                                            <option value="Lateral" <?php echo $tupla['posicao'] == 'Lateral' ? 'selected ' : '' ; ?>>Lateral</option>
                                                            <option value="Zagueiro" <?php echo $tupla['posicao'] == 'Zagueiro' ? 'selected ' : '' ; ?>>Zagueiro</option>
                                                            <option value="Volante" <?php echo $tupla['posicao'] == 'Volante' ? 'selected ' : '' ; ?>>Volante</option>
                                                            <option value="Atacante" <?php echo $tupla['posicao'] == 'Atacante' ? 'selected ' : '' ; ?>>Atacante</option>
                                                            <option value="Meia" <?php echo $tupla['posicao'] == 'Meia' ? 'selected ' : '' ; ?>>Meia</option>
                                                        </select>
                                                        <div class="input-field">
                                                            <input id="salario" type="number" step="0.01" name="salario" value="<?php echo $tupla['salario']; ?>" />
                                                            <label for="salario">Salário R$</label>
                                                        </div>
                                                        <div class="input-field">
                                                            <input id="dataNascimento" type="text" name="dataNascimento" value="<?php echo converterData($tupla['dataNascimento']); ?>" />
                                                            <label for="dataNascimento">Data de Nascimento</label>
                                                        </div>
                                                        <select name="clube">
                                                            <option value="0" disabled selected>Clube</option>
                                                            <?php 
                                                                $codigo = $tupla['clubeCodigo'];
                                                                $sqlC = 'select * from clube order by nome';
                                                                $resultadoC = mysqli_query($conexao, $sqlC);
                                                                while ($tuplaC = mysqli_fetch_array($resultadoC)) {
                                                                    $aux = '';
                                                                    if ($codigo == $tuplaC['codigo']) {
                                                                      $aux = ' selected';
                                                                    }
                                                                    echo '<option value="', $tuplaC['codigo'],'" ', $aux,'>', $tuplaC['nome'], '</option>';
                                                                } 
                                                            ?>
                                                        </select>

                                                          <center>
                                                              <input type="hidden" name="tabela" value="<?php echo $tabela; ?>">
                                                              <input type="hidden" name="link" value="<?php echo $link; ?>">
                                                              <input type="hidden" name="codigo" value="<?php echo $tupla['codigo']; ?>">
                                                              <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Cancelar</a>
                                                              <button class="waves-effect waves-green btn-flat black-text" name="acao" value="alterar"><i class="material-icons right">send</i>Alterar</button>
                                                          </center>
                                                      </form>
                                                  </center>
                                              </div>
                                          </div>
                                        </td>
                                        <td>
                                            <a class="waves-effect waves-light modal-trigger red-text" href="#excluir<?php echo $tupla['codigo'] ;?>"><i class="material-icons">clear</i></a>
                                            <div id="excluir<?php echo $tupla['codigo'] ;?>" class="modal" style="width: 350px;">
                                                <div class="modal-content black-text">
                                                    <center>
                                                        <h4>Confirmar Exclusão!</h4>
                                                        <p>Deseja realmente excluir esse registro?<br />Essa operação não poderá ser desefeita</p>
                                                        <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Cancelar</a>
                                                        <a href="components/funcoes/acao.php?acao=excluir&codigo=<?php echo $tupla['codigo']; ?>&tabela=<?php echo $tabela; ?>&link=<?php echo $link; ?>" class="modal-action waves-effect waves-teal btn-flat">Confirmar</a>
                                                    </center>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- Rodapé -->
    <footer class="page-footer white">
        <div class="footer-copyright white">
            <div class="container white right-align black-text">
                © 2018, Designed by Mateus Lucas
            </div>
        </div>
    </footer>


    <!--  Scripts-->
    <script src="components/js/jquery-2.1.1.min.js"></script>
    <script src="components/js/materialize.js"></script>
    <script src="components/js/init.js"></script>

</body>

</html>
