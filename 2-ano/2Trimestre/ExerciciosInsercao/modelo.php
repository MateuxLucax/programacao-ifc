<!DOCTYPE html>
<html lang="pt-br">

<?php
  include 'assets/connect/connect.php';
  include 'assets/funcoes/funcoes.php';
  $titulo = 'Foguetes';
  $link = '../../modelo.php#conteudo';
  $tabela = $Foguetes;
  $pesquisa = isset($_POST['pesquisa'])?$_POST['pesquisa']:'';
  $filtro = isset($_POST['filtro'])?$_POST['filtro']:'nenhum';
  if ($filtro == 'codigo' || $filtro == 'nenhum' || $filtro == 'capacidadeLEO') {
    if ($pesquisa != '') { $pesquisa = ' where '. $filtro.' = '. $pesquisa. ' order by '.$filtro; }
    $sql = 'select * from '. $tabela. $pesquisa;
  } elseif ($filtro == 'nome' || $filtro == 'fabricante') {
    $sql = 'select * from '. $tabela. ' where '. $filtro.' like "'. $pesquisa. '%" order by '.$filtro;
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
</head>

<body class="template-page sidebar-collapse">
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-color-on-scroll" color-on-scroll="300">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="modelo.php" style="text-transform: uppercase;"><?php echo $titulo; ?></a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="../../"><p>Projetos</p></a></li>
                    <li class="nav-item"><a class="nav-link" href="../"><p>Página Principal</p></a></li>
                    <li class="nav-item"><div class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown" id="paginas"><p class="nav-link">Páginas</p></a><ul class="dropdown-menu" aria-labelledby="paginas"><a class="dropdown-item" href="modelo.php">Foguetes</a></ul></div></li>
                    <li class="nav-item"><a class="nav-link" href="https://twitter.com/MatteussLuccass" target="_blank"><i class="fa fa-twitter"></i><p class="d-lg-none d-xl-none">Twitter</p></a></li>
                    <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/mateuxlucax/" target="_blank"><i class="fa fa-instagram"></i><p class="d-lg-none d-xl-none">Instagram</p></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <div class="page-header">
            <div class="page-header-image imagem-fundo" data-parallax="true">
                <h1 class="wrapper-text"><?php echo $titulo; ?> </h1>
            </div>
        </div>
        <div class="section" id="conteudo">
            <h1 style="text-align: center;"><?php echo $titulo; ?></h1>
            <div class="row container-fluid">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <h3>Pesquisar</h3>
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
                              <option value="nome" <?php echo $filtro == 'nome' ? 'selected ' : ''; ?>>Nome</option>
                              <option value="fabricante"  <?php echo $filtro == 'fabricante' ? 'selected ' : ''; ?>>Fabricante</option>
                              <option value="capacidadeLEO" <?php echo $filtro == 'capacidadeLEO' ? 'selected ' : ''; ?>>Capacidade para OBT</option>
                            </select>
                        </div>
                        <div class="col-3 col-sm-3 col-md-6 col-lg-4">
                            <button class="btn btn-primary float-right" type="submit">Pesquisar</button>
                        </div>
                    </div>  
                    </form>
                    <br />
                    <h3>Inserir</h3>
                    <form method="post" action="assets/funcoes/inserir.php">
                    <div class="input-group">
                        <input type="text" class="form-control" name="nome" placeholder="Nome">
                        <span class="input-group-addon"><i class="now-ui-icons objects_spaceship"></i></span>
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control" name="fabricante" placeholder="Fabricante">
                        <span class="input-group-addon"><i class="now-ui-icons design_app"></i></span>
                    </div>
                    <div class="row">
                        <div class="col-9 col-sm-9 col-md-6 col-lg-8" style="margin-top: 6px;">  
                          <div class="input-group">
                              <input type="number" step="0.1" class="form-control" name="capacidadeLEO" placeholder="Capacidade para OBT em ton" min="0">
                              <span class="input-group-addon"><i class="now-ui-icons objects_globe"></i></span>
                          </div>
                        </div>
                        <input type="hidden" name="link" value="<?php echo $link; ?>">
                        <input type="hidden" name="tabela" value="<?php echo $tabela; ?>">
                        <div class="col-3 col-sm-3 col-md-6 col-lg-4">
                            <button class="btn btn-primary float-right" type="submit">Inserir</button>
                        </div>
                    </div>  
                    </form>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <table class="table table-striped table-responsive">
                      <thead>
                        <tr>
                          <th scope="col">Código</th>
                          <th scope="col">Nome</th>
                          <th scope="col">Fabricante</th>
                          <th scope="col">Capacidade para OBT</th>
                          <th scope="col">Alterar</th>
                          <th scope="col">Excluir</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php while ($tupla = mysqli_fetch_array($resultado)) { ?>
                        <tr>
                          <th scope="row"><?php echo $tupla['codigo']; ?></th>
                          <td><?php echo $tupla['nome']; ?></td>
                          <td><?php echo $tupla['fabricante']; ?></td>
                          <td><?php echo number_format($tupla['capacidadeLEO'], 1, ',', '.'); ?>t</td>
                          <td><a href="" data-toggle="modal" data-target="#alterar<?php echo $tupla['codigo']; ?>"><i class="now-ui-icons ui-2_settings-90"></i></a>
                            <div class="modal fade" id="alterar<?php echo $tupla['codigo']; ?>" tabindex="-1" role="dialog" aria-labelledby="tituloAlterar<?php echo $tupla['codigo']; ?>" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="tituloAlterar<?php echo $tupla['codigo']; ?>">Alterar registro</h4>
                                  </div>
                                  <form method="post" action="assets/funcoes/alterar.php">
                                  <div class="modal-body">
                                      <p>Nome</p>
                                      <div class="input-group">
                                          <input type="text" class="form-control" name="nome" placeholder="Nome" value="<?php echo $tupla['nome']; ?>">
                                          <span class="input-group-addon"><i class="now-ui-icons objects_spaceship"></i></span>
                                      </div>
                                      <p>Fabricante</p>
                                      <div class="input-group">
                                          <input type="text" class="form-control" name="fabricante" placeholder="Fabricante" value="<?php echo $tupla['fabricante']; ?>">
                                          <span class="input-group-addon"><i class="now-ui-icons design_app"></i></span>
                                      </div>
                                      <p>Capacidade para OBT em ton</p> 
                                      <div class="input-group">
                                          <input type="number" step="0.1" class="form-control" name="capacidadeLEO" placeholder="Capacidade para OBT em ton" min="0" value="<?php echo $tupla['capacidadeLEO']; ?>">
                                          <span class="input-group-addon"><i class="now-ui-icons objects_globe"></i></span>
                                      </div>
                                    <input type="hidden" name="link" value="<?php echo $link; ?>">
                                    <input type="hidden" name="tabela" value="<?php echo $tabela; ?>">
                                    <input type="hidden" name="codigo" value="<?php echo $tupla['codigo']; ?>">
                                  </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Fechar</button>
                                      <button class="btn btn-info btn-simple" type="submit">Alterar</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td><a href="javascript:excluirRegistro('assets/funcoes/exclusao.php?acao=excluir&codigo=<?php echo $tupla['codigo']; ?>&tabela=<?php echo $tabela; ?>&link=<?php echo $link; ?>')"><i class="now-ui-icons ui-1_simple-remove"></i></a></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <div class="copyright">&copy;<script>document.write(new Date().getFullYear())</script>, Designed by Mateus Lucas.</div>
            </div>
        </footer>
    </div>
</body>

<script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/plugins/bootstrap-switch.js"></script>
<script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<script src="assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="assets/js/custom.js?v=1.1.0" type="text/javascript"></script>
</html>