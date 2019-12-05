<!DOCTYPE html>
<html lang="pt-br">

<?php
  include 'components/connect/connect.php';
  include 'components/funcoes/funcoes.php';
  $titulo = 'Estados';
  $link = '../../index.php#tabela';
  $tabela = $estados;
  $filtro = isset($_POST['filtro'])?$_POST['filtro']:'nenhum';
  $codigo = isset($_GET['codigo'])?$_GET['codigo']:'';
  $sql = 'select * from '. $tabela. ' order by nome';
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
            <li><a href="../">Projetos</a></li>
        </ul>
        <div class="navbar-fixed">
            <nav class="white" role="navigation">
                <div class="nav-wrapper container">
                    <a id="logo-container" href="index.php" class="brand-logo">
                        <?php echo $titulo ?></a>
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
        <div class="parallax parallax-image"><img src="components/img/background.jpg"></div>
    </div>

    <!-- Conteúdo -->
    <main>
        <div class="container">
            <div class="section">

                <!-- Pesquisa -->
                <h3 class="center-align">Estados</h3>
                <div>
                    <form method="post">
                        <div class="row">
                            <div class="input-field col s6 offset-s3">
                              <select name="filtro">
                                <option value="nenhum" <?php $codigo == '' ? 'selected' : '' ?> disabled>Escolha um estado</option>
                                <?php
                                  while ($tupla = mysqli_fetch_array($resultado)) {
                                    $aux = '';
                                    if ($codigo == $tupla['codigo']) {
                                      $aux = ' selected';
                                    }
                                    echo '<option value="', $tupla['codigo'],'" ', $aux,'>', $tupla['nome'], '</option>';
                                  }
                                ?>
                                </select>
                                <label>Filtrar</label>
                            </div><!--
                            <div class="col s6 offset-s3">
                                <center>
                                    <button class="waves-effect waves-light btn-flat" ><i class="material-icons right">send</i>Pesquisar</button>
                                </center>
                            </div>-->
                        </div>
                    </form>
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
