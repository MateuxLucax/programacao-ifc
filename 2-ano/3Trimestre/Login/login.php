<!DOCTYPE html>
<html lang="pt-br">

<?php
  $titulo = 'Entrar';
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
        <div class="container">
            <div class="section">

                <!-- Pesquisa -->
                <h3 class="center-align">Autenticação</h3>
                <div>
                    <form method="post" action="">
                        <div class="row">
                            <div class="col s12 m6 offset-m3">
                              <div class="input-field s12">
                                  <i class="material-icons prefix">person_outline</i>
                                  <input id="usuario" type="text" name="usuario">
                                  <label for="usuario">Usuário</label>
                              </div>
                              <div class="input-field col s12">
                                  <i class="material-icons prefix">lock_outline</i>
                                  <input id="senha" type="password" name="senha">
                                  <label for="senha">Senha</label>
                              </div>
                              <div class="col s6 offset-s3">
                                  <center>
                                      <button class="waves-effect waves-light btn-flat" style="margin-top: 14px;"><i class="material-icons right">send</i>Entrar</button>
                                  </center>
                              </div>
                            </div>
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
