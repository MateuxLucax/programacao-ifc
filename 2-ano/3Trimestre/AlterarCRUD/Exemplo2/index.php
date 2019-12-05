<!DOCTYPE html>
<html lang="pt-br">

<?php
  include 'components/connect/connect.php';
  include 'components/funcoes/funcoes.php';
  $titulo = 'Foguetes';
  $link = '../../index.php#tabela';
  $tabela = $Foguetes;
  $pesquisa = isset($_POST['pesquisa'])?$_POST['pesquisa']:'';
  $filtro = isset($_POST['filtro'])?$_POST['filtro']:'nenhum';
  if ($filtro == 'codigo' || $filtro == 'nenhum' || $filtro == 'capacidadeLEO') {
    if ($pesquisa != '') { $aux = ' where '. $filtro.' = '. $pesquisa. ' order by '.$filtro; }
    $sql = 'select * from '. $tabela. $aux;
  } elseif ($filtro == 'nome' || $filtro == 'fabricante') {
    $sql = 'select * from '. $tabela. ' where '. $filtro.' like "'. $pesquisa. '%" order by '.$filtro;
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
                            <div class="input-field col m6 s12 l5">
                                <i class="material-icons prefix">search</i>
                                <input id="icon_prefix" type="text" name="pesquisa" value="<?php echo $pesquisa; ?>">
                                <label for="icon_prefix">Pesquisar</label>
                            </div>
                            <div class="input-field col m6 s12 l4">
                                <select name="filtro">
                                    <option value="nenhum" <?php echo $filtro=='nenhum' ? 'selected ' : '' ; ?> disabled>Escolha uma opção</option>
                                    <option value="codigo" <?php echo $filtro=='codigo' ? 'selected ' : '' ; ?>>Código</option>
                                    <option value="nome" <?php echo $filtro=='nome' ? 'selected ' : '' ; ?>>Nome</option>
                                    <option value="fabricante" <?php echo $filtro=='fabricante' ? 'selected ' : '' ; ?>>Fabricante</option>
                                    <option value="capacidadeLEO" <?php echo $filtro=='capacidadeLEO' ? 'selected ' : '' ; ?>>Capacidade para OBT</option>
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
                                        <th>Nome</th>
                                        <th>Fabricante</th>
                                        <th>Capacidade para OBT</th>
                                        <th>Alterar</th>
                                        <th>Excluir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($tupla = mysqli_fetch_array($resultado)) { ?>
                                    <tr>
                                        <td>
                                            <?php echo $tupla['codigo']; ?>
                                        </td>
                                        <td>
                                            <?php echo $tupla['nome']; ?>
                                        </td>
                                        <td>
                                            <?php echo $tupla['fabricante']; ?>
                                        </td>
                                        <td>
                                            <?php echo number_format($tupla['capacidadeLEO'], 1, ',', '.'); ?>t
                                        </td>
                                        <td>
                                          <a class="waves-effect waves-light modal-trigger green-text" href="#alterar<?php echo $tupla['codigo'] ;?>"><i class="material-icons">build</i></a>
                                          <div id="alterar<?php echo $tupla['codigo'] ;?>" class="modal">
                                              <div class="modal-content">
                                                  <center>
                                                      <h4>Alterar</h4>
                                                      <form action="components/funcoes/acao.php" method="post">
                                                          <div class="input-field col s12">
                                                              <input id="nome" type="text" name="nome" value="<?php echo $tupla['nome']; ?>" />
                                                              <label for="nome">Nome</label>
                                                          </div>
                                                          <div class="input-field col s12">
                                                              <input id="fabricante" type="text" name="fabricante" value="<?php echo $tupla['fabricante'] ?>" />
                                                              <label for="fabricante">Fabricante</label>
                                                          </div>
                                                          <div class="input-field col s12">
                                                              <input id="capacidadeLEO" type="number" step="0.1" name="capacidadeLEO" value="<?php echo $tupla['capacidadeLEO'] ?>" />
                                                              <label for="capacidadeLEO">Capacidade para OBT</label>
                                                          </div>
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
                                                <div class="modal-content">
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
