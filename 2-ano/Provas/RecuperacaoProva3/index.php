<!DOCTYPE html>
<html lang="pt-br">

<?php
  include 'funcoes.php';
  $titulo = 'Anotações';
  $link = 'index.php#tabela';
  $tabela = $GLOBAL['Anotacoes'];
  $pesquisa = isset($_POST['pesquisa'])?$_POST['pesquisa']:'';
  $marcados = isset($_GET['marcados'])?$_GET['marcados']:'';
  $filtroCor = isset($_POST['filtroCor'])?$_POST['filtroCor']:'';
  $aux = '';
  $sql = 'SELECT * FROM '. $tabela. $aux;
  if ($marcados == 1) {
      $sql = 'SELECT * FROM '. $tabela. ' WHERE estrela = true';
  } else {
      $sql = 'SELECT * FROM '. $tabela;
  }
  if ($filtroCor != '') {
      $sql = "SELECT * FROM ". $tabela. " WHERE cor = '".$filtroCor."'";
  }
  if ($pesquisa != '') { 
    $sql = "SELECT * FROM Anotacoes WHERE titulo LIKE '%". $pesquisa. "%' OR texto LIKE '%". $pesquisa. "%' ORDER BY  titulo"; 
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
            <li><a href="lixeira.php">Lixeira</a></li>
            <li><a href="../">Projetos</a></li>
        </ul>
        <div class="navbar-fixed">
            <nav class="white" role="navigation">
                <div class="nav-wrapper container">
                    <a id="logo-container" href="index.php" class="brand-logo">
                        <?php echo $titulo ?>
                    </a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="lixeira.php">Lixeira</a></li>
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

                <!-- Pesquisa -->
                <h3 class="center-align">Pesquisar</h3>
                <div>
                        <div class="row">
                    <form method="post">
                            <div class="input-field col m6 s12 l6">
                                <i class="material-icons prefix">search</i>
                                <input id="icon_prefix" type="text" name="pesquisa" value="<?php echo $pesquisa; ?>">
                                <label for="icon_prefix">Pesquisar</label>
                            </div>
                            <div class="col s12 l2">
                                <center>
                                    <button class="waves-effect waves-light btn-flat" style="margin-top: 14px;"><i class="material-icons right">send</i>Pesquisar</button>
                                </center>
                            </div>
                    </form>
                    <div class="col s12 l2">
                        <center>
                            <a class="waves-effect waves-light btn-flat" style="margin-top: 14px;" href="index.php?marcados=1"><i class="material-icons right">grade</i>Favoritas</a>
                        </center>
                    </div>
                    <div class="col s12 l2">
                        <center>
                            <a class="waves-effect waves-light btn-flat" style="margin-top: 14px;" href="index.php?marcados=0" ><i class="material-icons right" >reorder</i>Mostrar todas</a>
                        </center>
                    </div>
                        </div>
                        <form method="post">    
                        <div class="row">
                            <h6><center><b>Filtrar por cor</b></center></h6>
                            <center>
                            <div class="col s6 offset-s2">
                                <?php geradorSelect($tabela, $filtroCor, 'cor', 'cor', 'filtroCor'); ?>
                                <label>Escolher cor</label>
                            </div>
                            <div class="col s3">
                                <button class="waves-effect waves-light btn-flat" style="margin-top: 14px;"><i class="material-icons right">send</i>Pesquisar</button>
                            </div>
                            </center>
                        </div>
                        </form>
                </div>
            </div>

            <!-- Anotações -->
            <div class="row" id="tabela">
                <h3 class="center-align">Anotações</h3>
                <div>
                    <div class="row">
                        <?php while ($tupla = mysqli_fetch_array($resultado)) { 
                            if ($tupla['excluir'] == false) {?>
                            <div class="col s12 m2" style="background-color: <?php echo $tupla['cor']; ?>; margin: 5px 5px 5px 5px;">
                                <h6 class="black-text"><b><?php echo $tupla['titulo']; ?></b>
                                
                                <a href="acao.php?acao=estrela&codigo=<?php echo $tupla['codigo']; ?>&tabela=<?php echo $tabela; ?>&star=<?php echo $tupla['estrela'] == false ? 'true' : 'false'; ?>&link=<?php echo $link; ?> 
                                                 <?php echo $tupla['estrela'] == 1 ? '<i class="material-icons yellow-text">grade</i>' : '<i class="material-icons right black-text">grade</i>'; ?>
                                </a>
                                
                                </h6>
                                <p><?php echo $tupla['texto']; ?></p>
                                      <a class="waves-effect waves-light modal-trigger green-text" href="#alterar<?php echo $tupla['codigo'] ;?>"><i class="material-icons">build</i></a>
                                      <div id="alterar<?php echo $tupla['codigo'] ;?>" class="modal">
                                          <div class="modal-content">
                                              <center>
                                                  <h4>Alterar</h4>
                                                  <form action="acao.php" method="post">
                                                      <div class="input-field col s12">
                                                          <input id="titulo" type="text" name="titulo" value="<?php echo $tupla['titulo']; ?>" />
                                                          <label for="titulo">Titulo</label>
                                                      </div>
                                                      <div class="input-field col s12">
                                                          <input id="texto" type="text" name="texto" value="<?php echo $tupla['texto']; ?>" />
                                                          <label for="texto">Texto</label>
                                                      </div>
                                                      <div class="input-field col s12">
                                                          <label for="cor">Cor de fundo</label>
                                                          <br>
                                                          <input id="cor" type="color" name="cor" value="<?php echo $tupla['cor']; ?>" />
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
                                        <a class="waves-effect waves-light modal-trigger red-text right" href="#excluir<?php echo $tupla['codigo'] ;?>"><i class="material-icons">clear</i></a>
                                        <div id="excluir<?php echo $tupla['codigo'] ;?>" class="modal" style="width: 350px;">
                                            <div class="modal-content">
                                                <center>
                                                    <h4>Confirmar Exclusão!</h4>
                                                    <p>Deseja realmente excluir esse registro?<br />Essa operação não poderá ser desefeita</p>
                                                    <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Cancelar</a>
                                                    <a href="acao.php?acao=excluir&codigo=<?php echo $tupla['codigo']; ?>&tabela=<?php echo $tabela; ?>&link=<?php echo $link; ?>" class="modal-action waves-effect waves-teal btn-flat">Confirmar</a>
                                                </center>
                                            </div>
                                        </div>
                            </div>
                                <?php  }}  ?>
                        </div>
                    </div>
                </div>
            </div>

        <!-- Adicionar --> 
        <div class="row container">
            <center>
                <b>Adicionar:</b> <a class="waves-effect waves-light modal-trigger orange-text" href="#inserir"><i class="material-icons">add_circle_outline</i></a>
            </center>
        </div>
        <div id="inserir" class="modal">
            <div class="modal-content">
                <center>
                    <h4>Inserir</h4>
                    <form action="acao.php" method="post">
                        <div class="input-field col s12">
                              <input id="titulo" type="text" name="titulo" />
                              <label for="titulo">Titulo</label>
                          </div>
                          <div class="input-field col s12">
                              <input id="texto" type="text" name="texto" />
                              <label for="texto">Texto</label>
                          </div>
                          <div class="input-field col s12">
                              <label for="cor">Cor de fundo</label>
                              <br>
                              <input id="cor" type="color" name="cor" />
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
    </main>

    <!-- Rodapé -->
    <footer class="page-footer white">
        <div class="footer-copyright white">
            <div class="container white right-align black-text">
                © 2018, Paulo Henrique Warmling  & Mateus Lucas
            </div>
        </div>
    </footer>


    <!--  Scripts-->
    <script src="components/js/jquery-2.1.1.min.js"></script>
    <script src="components/js/materialize.js"></script>
    <script src="components/js/init.js"></script>

</body>

</html>
