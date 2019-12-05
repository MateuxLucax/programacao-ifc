<!DOCTYPE html>
<html lang="pt-br">

<?php
  include 'funcoes.php';
  $titulo = 'Carros';
  $link = 'carro.php#tabela';
  $tabela = $GLOBAL['tbCarro'];
  $pesquisa = isset($_POST['pesquisa'])?$_POST['pesquisa']:'';
  $filtro = isset($_POST['filtro'])?$_POST['filtro']:'nenhum';
  if ($filtro == 'codigoCarro' || $filtro == 'nenhum') {
    $aux = '';
    if ($pesquisa != '') { $aux = ' WHERE '. $filtro.' = '. $pesquisa. ' ORDER BY '.$filtro; }
    $sql = 'SELECT * FROM '. $tabela. $aux;
  } elseif ($filtro == 'valor') {
    $sql = 'SELECT * FROM '. $tabela. ' WHERE '. $filtro.' LIKE "'. $pesquisa. '%" ORDER BY '.$filtro;
  } elseif ($filtro == 'anoFabricacao' || $filtro == 'dataVenda'){
    if ($pesquisa == '') { $sql = 'SELECT * FROM '. $tabela; }
    else {
      $data = converterDataYmd($pesquisa);
      $sql = 'SELECT * FROM '. $tabela. ' WHERE '. $filtro. ' LIKE "'.$data .'%" ORDER BY '. $filtro. ' DESC';
    }
  }
  $resultado = mysqli_query($GLOBALS['conexao'], $sql);
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
            <li><a href="index.php">Fabricantes</a></li>
            <li><a href="../">Projetos</a></li>
        </ul>
        <div class="navbar-fixed">
            <nav class="white" role="navigation">
                <div class="nav-wrapper container">
                    <a id="logo-container" href="index.php" class="brand-logo">
                        <?php echo $titulo ?>
                    </a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="index.php">Fabricantes</a></li>
                        <li><a href="../">Projetos</a></li>
                        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- Imagem de fundo -->
    <div class="parallax-container">
        <div class="parallax parallax-image"><img src="components/img/background.png"></div>
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
                            <div class="input-field col m6 s12 l5">
                                <i class="material-icons prefix">search</i>
                                <input id="icon_prefix" type="text" name="pesquisa" value="<?php echo $pesquisa; ?>">
                                <label for="icon_prefix">Pesquisar</label>
                            </div>
                            <div class="input-field col m6 s12 l4">
                                <select name="filtro">
                                    <option value="nenhum" <?php echo $filtro == 'nenhum' ? 'selected ' : '' ; ?> disabled>Escolha uma opção</option>
                                    <option value="codigoCarro" <?php echo $filtro == 'codigoCarro' ? 'selected ' : '' ; ?>>Código</option>
                                    <option value="anoFabricacao" <?php echo $filtro == 'anoFabricacao' ? 'selected ' : '' ; ?>>Ano de fabricação</option>
                                    <option value="dataVenda" <?php echo $filtro == 'dataVenda' ? 'selected ' : '' ; ?>>Data de venda</option>
                                    <option value="valor" <?php echo $filtro == 'valor' ? 'selected ' : '' ; ?>>Valor</option>
                                </select>
                                <label>Filtrar</label>
                            </div>
                            <div class="col s6 offset-s3 m12 l3">
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
                                        <th>Ano de fabricação</th>
                                        <th>Data de venda</th>
                                        <th>Valor</th>
                                        <th>Função</th>
                                        <th>Alterar</th>
                                        <th>Excluir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($tupla = mysqli_fetch_array($resultado)) { ?>
                                    <tr>
                                        <td>
                                            <?php echo $tupla['codigoCarro']; ?>
                                        </td>
                                        <td>
                                          <?php echo converterData($tupla['anoFabricacao']);; ?>
                                        </td>
                                        <td>
                                          <?php echo converterData($tupla['dataVenda']); ?>
                                        </td>
                                        <td>R$
                                          <?php echo number_format($tupla['valor'], 2, ',', '.'); ?>
                                        </td>
                                        <td>
                                            <?php Query1paraN($GLOBAL['tbFabricante'], 'codigo', $tupla['fabricante'], 'nome') ?>
                                        </td>
                                        <!-- Alterar -->
                                        <td>
                                          <a class="waves-effect waves-light modal-trigger green-text" href="#alterar<?php echo $tupla['codigoCarro'] ;?>"><i class="material-icons">build</i></a>
                                          <div id="alterar<?php echo $tupla['codigoCarro'] ;?>" class="modal">
                                              <div class="modal-content">
                                                  <center>
                                                      <h4>Alterar</h4>
                                                      <form action="acao.php" method="post">
                                                          <div class="input-field col s12">
                                                              <input id="anoFabricacao" type="text" name="anoFabricacao" value="<?php echo converterData($tupla['anoFabricacao']); ?>" />
                                                              <label for="anoFabricacao">Ano de fabricação/label>
                                                          </div>
                                                          <div class="input-field col s12">
                                                              <input id="dataVenda" type="text" name="dataVenda" value="<?php echo converterData($tupla['dataVenda']); ?>" />
                                                              <label for="dataVenda">Data de venda</label>
                                                          </div>
                                                            <div class="input-field col s12">
                                                              <input id="valor" type="number" step="0.01" name="valor" value="<?php echo $tupla['valor']; ?>" />
                                                              <label for="valor">Valor</label>
                                                          </div>
                                                          <div class="input-field col s12">
                                                            <?php geradorSelect($GLOBAL['tbFabricante'], $tupla['fabricante'], 'codigo', 'nome', 'fabricante') ?>
                                                          </div>
                                                          <center>
                                                              <input type="hidden" name="tabela" value="<?php echo $tabela; ?>">
                                                              <input type="hidden" name="link" value="<?php echo $link; ?>">
                                                              <input type="hidden" name="codigoCarro" value="<?php echo $tupla['codigoCarro']; ?>">
                                                              <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Cancelar</a>
                                                              <button class="waves-effect waves-green btn-flat black-text" name="acao" value="alterar"><i class="material-icons right">send</i>Alterar</button>
                                                          </center>
                                                      </form>
                                                  </center>
                                              </div>
                                          </div>
                                        </td>
                                        <!-- Excluir -->
                                        <td>
                                            <a class="waves-effect waves-light modal-trigger red-text" href="#excluir<?php echo $tupla['codigoCarro']; ?>"><i class="material-icons">clear</i></a>
                                            <div id="excluir<?php echo $tupla['codigoCarro']; ?>" class="modal" style="width: 350px;">
                                                <div class="modal-content">
                                                    <center>
                                                        <h4>Confirmar Exclusão!</h4>
                                                        <p>Deseja realmente excluir esse registro?<br />Essa operação não poderá ser desefeita</p>
                                                        <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Cancelar</a>
                                                        <a href="acao.php?acao=excluir&codigo=<?php echo $tupla['codigoCarro']; ?>&tabela=<?php echo $tabela; ?>&link=<?php echo $link; ?>" class="modal-action waves-effect waves-teal btn-flat">Confirmar</a>
                                                    </center>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    <!-- Inserir -->
                                    <tr>
                                      <td colspan="5"></td>
                                      <td><b>Adicionar</b></td>
                                      <td>
                                        <a class="waves-effect waves-light modal-trigger orange-text" href="#inserir"><i class="material-icons">add_circle_outline</i></a>
                                        <div id="inserir" class="modal">
                                            <div class="modal-content">
                                                <center>
                                                    <h4>Inserir</h4>
                                                    <form action="acao.php" method="post">
                                                        <div class="input-field col s12">
                                                            <input id="anoFabricacao" type="text" name="anoFabricacao" />
                                                            <label for="anoFabricacao">Ano de fabricação</label>
                                                        </div>
                                                        <div class="input-field col s12">
                                                            <input id="dataVenda" type="text" name="dataVenda" />
                                                            <label for="dataVenda">Data de venda</label>
                                                        </div>
                                                        <div class="input-field col s12">
                                                            <input id="valor" type="number" step="0.01" name="valor" />
                                                            <label for="valor">Valor</label>
                                                        </div>
                                                        <div class="input-field col s12">
                                                          <?php geradorSelect($GLOBAL['tbFabricante'], 1, 'codigo', 'nome', 'fabricante') ?>
                                                        </div>
                                                        <center>
                                                            <input type="hidden" name="tabela" value="<?php echo $tabela; ?>">
                                                            <input type="hidden" name="link" value="<?php echo $link; ?>">
                                                            <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Cancelar</a>
                                                            <button class="waves-effect waves-green btn-flat black-text" name="acao" value="inserir"><i class="material-icons right">send</i>Inserir</button>
                                                        </center>
                                                    </form>
                                                </center>
                                            </div>
                                        </div>
                                      </td>
                                    </tr>
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
