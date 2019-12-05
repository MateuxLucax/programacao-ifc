<!DOCTYPE html>
<html lang="pt-br">

<?php
  include 'funcoes.php';
  $titulo = 'Vendas';
  $link = 'index.php';
  $tabela = $GLOBAL['tbVenda'];
  $pesquisa = isset($_POST['pesquisa'])?$_POST['pesquisa']:'';
  $filtro = isset($_POST['filtro'])?$_POST['filtro']:'nenhum';
  $acao = isset($_POST['acao'])?$_POST['acao']:'inserir';
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
            <li><a href="../">Projetos</a></li>
        </ul>
        <div class="navbar-fixed">
            <nav class="white" role="navigation">
                <div class="nav-wrapper container">
                    <a id="logo-container" href="index.php" class="brand-logo">
                        <?php echo $titulo ?>
                    </a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="../">Projetos</a></li>
                    </ul>
                    <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
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
      <?php if ($acao == 'inserir') { ?>
        <div class="container">
            <div class="row">
                <center>
                    <h4>Inserir</h4>
                    <form action="acao.php" method="post">
                        <div class="input-field col s4">
                            <input id="dataVenda" type="text" name="dataVenda" />
                            <label for="dataVenda">Data de venda</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="dataVendicmento" type="text" name="dataVendicmento" />
                            <label for="dataVendicmento">Data de vencimento</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="dataPagamento" type="text" name="dataPagamento" />
                            <label for="nome">Data de pagamento</label>
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
    <?php } ?>

    <?php if ($acao == 'alterar') {
            $codigo = isset($_POST['codigo'])?$_POST['codigo']:'';
            $sqlVenda = 'SELECT * FROM '. $tabela. ' WHERE codigo = '. $codigo;
            $resultado = mysqli_query($GLOBALS['conexao'], $sqlVenda);
    ?>
      <div class="container">
          <div class="row">
              <center>
                  <?php while ($tupla = mysqli_fetch_array($resultado)) { ?>
                  <h4>Inserir produtos na venda</h4>
                  <form action="acao.php" method="post">
                      <div class="input-field col s4">
                          <input id="dataVenda" type="text" name="dataVenda" value="<?php echo $tupla['dataVenda'] ?>"/>
                          <label for="dataVenda">Data de venda</label>
                      </div>
                      <div class="input-field col s4">
                          <input id="dataVendicmento" type="text" name="dataVendicmento" value="<?php echo $tupla['dataVencimento'] ?>" />
                          <label for="dataVendicmento">Data de vencimento</label>
                      </div>
                      <div class="input-field col s4">
                          <input id="dataPagamento" type="text" name="dataPagamento" value="<?php echo $tupla['dataPagamento'] ?>" />
                          <label for="nome">Data de pagamento</label>
                      </div>
                      <center>
                          <input type="hidden" name="tabela" value="<?php echo $tabela; ?>">
                          <input type="hidden" name="link" value="<?php echo $link; ?>">
                          <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Cancelar</a>
                          <button class="waves-effect waves-green btn-flat black-text" name="acao" value="inserir"><i class="material-icons right">send</i>Inserir</button>
                      </center>
                  </form>
                  <?php } ?>
              </center>
          </div>
      </div>
    <?php } ?>
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
