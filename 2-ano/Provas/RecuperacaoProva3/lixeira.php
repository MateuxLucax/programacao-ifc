<!DOCTYPE html>
<html lang="pt-br">

<?php
  include 'funcoes.php';
  $titulo = 'Lixeira';
  $link = 'index.php#tabela';
  $tabela = $GLOBAL['Anotacoes'];
  $sql = 'SELECT * FROM '. $tabela;
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
            <li><a href="index.php">Anotações</a></li>
            <li><a href="../">Projetos</a></li>
        </ul>
        <div class="navbar-fixed">
            <nav class="white" role="navigation">
                <div class="nav-wrapper container">
                    <a id="logo-container" href="index.php" class="brand-logo">
                        <?php echo $titulo ?>
                    </a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="index.php">Anotações</a></li>
                        <li><a href="../">Projetos</a></li>
                    </ul>
                    <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Conteúdo -->
    <main>
        <div class="container">
            <div class="section">

            <!-- Anotações -->
            <div class="row" id="tabela">
                <h3 class="center-align">Excluídos</h3>
                <div>
                    <div class="row">
                        <?php while ($tupla = mysqli_fetch_array($resultado)) { 
                            if ($tupla['excluir'] == true) { ?>
                            <div class="col s12 m2" style="background-color: <?php echo $tupla['cor']; ?>; margin: 5px 5px 5px 5px;">
                                <h6 class="black-text"><b><?php echo $tupla['titulo']; ?></b></h6>
                                <p><?php echo $tupla['texto']; ?></p> 
                            </div>
                                <?php  }}  ?>
                        </div>
                    </div>
                </div>
            </div>

    </main>

    <!-- Rodapé -->
    <footer class="page-footer white">
        <div class="footer-copyright white">
            <div class="container white right-align black-text">
                © 2018, Paulo Henrique Warmling & Mateus Lucas
            </div>
        </div>
    </footer>


    <!--  Scripts-->
    <script src="components/js/jquery-2.1.1.min.js"></script>
    <script src="components/js/materialize.js"></script>
    <script src="components/js/init.js"></script>

</body>

</html>
