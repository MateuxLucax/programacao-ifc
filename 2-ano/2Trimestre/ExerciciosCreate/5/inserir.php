<!DOCTYPE html>
<html lang="pt-br">

<?php
  $titulo = 'Adicionar Times de Futebol';
  $link = '../../index.php#conteudo';
  include 'assets/connect/connect.php';
  include 'assets/funcoes/funcoes.php';
  $tabela = $tbTimeFutebol;
?>

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title><?php echo $titulo; ?></title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css">
</head>

<body class="login-page sidebar-collapse">
  <!-- Cabeçalho -->
  <header>
      <nav class="navbar navbar-expand-lg bg-primary text-primary fixed-top navbar-color-on-scroll" color-on-scroll="300">
          <div class="container">
              <div class="navbar-translate">
                  <a class="navbar-brand" href="inserir.php" style="text-transform: uppercase;">
                      <?php echo $titulo; ?>
                  </a>
                  <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
              </div>
              <div class="collapse navbar-collapse justify-content-end" id="navigation">
                  <ul class="navbar-nav">
                      <li class="nav-item">
                          <a class="nav-link" href="../../">
                              <p>Projetos</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="../">
                              <p>Página Principal</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="index.php">
                              <p>Times de Futebol</p>
                          </a>
                      </li>
                      <li class="nav-item"><a class="nav-link" href="https://twitter.com/MatteussLuccass" target="_blank"><i class="fa fa-twitter"></i><p class="d-lg-none d-xl-none">Twitter</p></a></li>
                      <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/mateuxlucax/" target="_blank"><i class="fa fa-instagram"></i><p class="d-lg-none d-xl-none">Instagram</p></a></li>
                  </ul>
              </div>
          </div>
      </nav>
  </header>
  <!-- Fim do cabeçalho -->

  <!-- Contúdo -->
    <div class="page-header clear-filter" filter-color="orange">
      <div class="page-header-image" style="background-image:url(assets/img/fundod.jpg)"></div>
      <div class="content">
        <div class="container">
          <div class="col-md-4 ml-auto mr-auto">
            <div class="card card-login card-plain">
              <form class="form" method="get" action="assets/funcoes/acao.php" style="margin-top: 50%;">
                <div class="card-body">
                    <h1><?php echo $titulo; ?></h1>
                    <div class="input-group">
                      <input type="text" class="form-control" name="nome" placeholder="Nome">
                      <span class="input-group-addon"><i class="now-ui-icons design_app"></i></span>
                    </div>
                    <div class="input-group">
                      <input type="number" class="form-control" name="numero_torcedores" placeholder="Número de Torcedores">
                      <span class="input-group-addon"><i class="now-ui-icons design_app"></i></span>
                    </div>
                    <div class="input-group">
                      <input type="text" class="form-control" name="cidade" placeholder="Cidade">
                      <span class="input-group-addon"><i class="now-ui-icons design_app"></i></span>
                    </div>
                    <input type="hidden" name="acao" value="inserir">
                    <input type="hidden" name="tabela" value="<?php echo $tabela; ?>">
                    <input type="hidden" name="link" value="<?php echo $link; ?>">
                    <button class="btn btn-primary btn-round btn-lg btn-block">Adicionar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  <!-- Fim do conteúdo -->

  <!-- Rodapé -->
  <footer class="footer">
      <div class="container">
          <div class="copyright" id="copyright">&copy;
              <script>
                  document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                </script>, Designed by Mateus Lucas</div>
      </div>
  </footer>
</div>

<!-- Códigos JS -->
<script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/plugins/bootstrap-switch.js"></script>
<script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<script src="assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="assets/js/custom.js?v=1.1.0" type="text/javascript"></script>
<script src="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js"></script>

</body>

</html>
