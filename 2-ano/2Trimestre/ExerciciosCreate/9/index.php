<!DOCTYPE html>
<html lang="pt-br">

<?php
  $titulo = 'Carros';
  include 'assets/connect/connect.php';
  include 'assets/funcoes/funcoes.php';
  $link = '../../index.php#conteudo';
  $tabela = $tbCarro;
  $pesquisa = isset($_POST['pesquisa'])?$_POST['pesquisa']:'';
  $filtro = isset($_POST['filtro'])?$_POST['filtro']:'nenhum';
  if ($filtro == 'codigo' || $filtro == 'nenhum') {
    if ($pesquisa != '') { $aux = ' where '. $filtro.' = '. $pesquisa. ' order by '.$filtro; }
    $sql = 'select * from '. $tabela. $aux;
  } elseif ($filtro == 'valor') {
    $sql = 'select * from '. $tabela. ' where '. $filtro.' like "'. $pesquisa. '%" order by '.$filtro;
  } elseif ($filtro == 'anoDeFabricacao' || $filtro == 'dataDeVenda'){
    if ($pesquisa == '') { $sql = 'select * from '. $tabela; }
    else {
      $data = converterDataYmd($pesquisa);
      $sql = 'select * from '. $tabela. ' where '. $filtro. ' like "'.$data .'%" order by '. $filtro. ' desc';
    }
  }
  $resultado = mysqli_query($conexao, $sql);
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
        <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>
    </head>

    <body class="template-page sidebar-collapse">

        <!-- Cabeçalho -->
        <header>
            <nav class="navbar navbar-expand-lg bg-primary text-primary fixed-top navbar-color-on-scroll" color-on-scroll="300">
                <div class="container">
                    <div class="navbar-translate">
                        <a class="navbar-brand" href="index.php" style="text-transform: uppercase;">
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
                                <a class="nav-link" href="inserir.php">
                                    <p>Adicionar <?php echo $titulo; ?></p>
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

        <!-- Conteúdo -->
        <main>
            <div class="wrapper">
                <div class="page-header page-header-small">
                    <div class="page-header">
                        <div class="page-header-image imagem-fundo" data-parallax="true">
                            <h1 class="wrapper-text"></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section" id="conteudo">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 ml-auto mr-auto text-center">
                            <h2 class="title" style="text-transform: uppercase;"><?php echo $titulo; ?></h2>
                            <h5 class="description"></h5>
                            <table class="table table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th class="text-center" scope="col">Código</th>
                                        <th class="text-center" scope="col">Ano de fabricação</th>
                                        <th class="text-center" scope="col">Data de venda</th>
                                        <th class="text-center" scope="col">Valor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($tupla = mysqli_fetch_array($resultado)) { ?>
                                    <tr>
                                        <th class="text-center" scope="row">
                                            <?php echo $tupla['codigo']; ?>
                                        </th>
                                        <td>
                                            <?php echo converterData($tupla['anoDeFabricacao']); ?>
                                        </td>
                                        <td>
                                            <?php echo converterData($tupla['dataDeVenda']); ?>
                                        </td>
                                        <td>R$
                                          <?php echo $tupla['valor']; ?>
                                        </td>
                                        <td><a href="javascript:excluirRegistro('assets/funcoes/acao.php?acao=excluir&codigo=<?php echo $tupla['codigo']; ?>&tabela=<?php echo $tabela; ?>&link=<?php echo $link; ?>')"><i class="now-ui-icons ui-1_simple-remove"></i></a></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="section text-center">
                        <div class="container">
                            <h2 class="title">Pesquisar</h2>
                            <h5 class="description"></h5>
                            <div class="row">
                                <div class="col-lg-6 text-center col-md-8 ml-auto mr-auto">
                                    <form method="post">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="pesquisa" placeholder="Pesquisar" value="<?php echo $pesquisa; ?>">
                                            <span class="input-group-addon"><i class="now-ui-icons ui-1_zoom-bold"></i></span>
                                        </div>
                                        <div class="row">
                                            <div class="col-9 col-sm-9 col-md-6 col-lg-8">
                                                <select name="filtro" class="custom-select">
                                                    <option disabled value="nenhum" <?php echo $filtro == 'nenhum' ? 'selected ' : ''; ?>>Filtro de pesquisa</option>
                                                    <option value="codigo" <?php echo $filtro == 'codigo' ? 'selected ' : ''; ?>>Código</option>
                                                    <option value="nome" <?php echo $filtro == 'anoDeFabricacao' ? 'selected ' : ''; ?>>Ano de fabricação</option>
                                                    <option value="dataDeVenda" <?php echo $filtro == 'dataDeVenda' ? 'selected ' : ''; ?>>Data de venda</option>
                                                    <option value="valor" <?php echo $filtro == 'valor' ? 'selected ' : ''; ?>>Valor</option>
                                                </select>
                                            </div>
                                            <div class="col-3 col-sm-3 col-md-6 col-lg-4">
                                                <button class="btn btn-round btn-primary float-right" type="submit">Pesquisar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
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
        <!-- Fim do rodapé -->

        <!-- Códigos JS -->
        <script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
        <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
        <script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/plugins/bootstrap-switch.js"></script>
        <script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
        <script src="assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
        <script src="assets/js/custom.js?v=1.1.0" type="text/javascript"></script>
        <script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script>
    </body>

</html>
