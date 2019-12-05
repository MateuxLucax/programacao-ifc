<!DOCTYPE html>
<html lang="pt-br">

<?php
  include_once "milhar.class.php";
  $inicializar = isset($_POST['jogar']) ? $_POST['jogar'] : false;
  $numeroUsuario = isset($_POST['numeroUsuario']) ? $_POST['numeroUsuario'] : null;
?>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Milhar | Jogo do Bicho</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon.png" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
  
  <!-- CSS -->
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/home.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<body>
  <header>
    <nav>
      <div class="nav-wrapper">
        <div class="container">
          <a href="index.html" class="brand-logo">Jogo do Bixo</a>
          <a href="#" data-target="navbar-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="index.html">Página Inicial</a></li>
            <li><a href="simples.php">Grupo Simples</a></li>
            <li class="active"><a href="milhar.php">Milhar</a></li>
          </ul>
        </div>
      </div>
    </nav>
  
    <ul class="sidenav" id="navbar-mobile">
      <li><a href="index.html">Página Inicial</a></li>
      <li><a href="simples.php">Grupo Simples</a></li>
      <li class="active"><a href="milhar.php">Milhar</a></li>
    </ul>
  </header>

  <main>
    <div class="section">
      <div class="row">
        <div class="container">
          <h4 class="center">Milhar</h4>
          <form method="POST">
            <div class="input-field col s12 m6 offset-m3">
              <i class="material-icons prefix">pets</i>
              <input id="numeroUsuario" name="numeroUsuario" type="text" class="validate" min="1" max="4" value="<?php echo $numeroUsuario ?>" required/>
              <label for="numeroUsuario">Escolha um milhar</label>
            </div>
            <div class="col s12 center">
              <button class="btn waves-effect waves-light" type="submit" value="true" name="jogar">Jogar<i class="material-icons right">send</i></button>
            </div>
          </form>
        </div>
      </div>
      <?php if ($inicializar == true) { ?>
      <?php
        $jogoSimples = new Simples;
        $jogoSimples->setNumeroUsuario($numeroUsuario);
        $sorteio = array('');
        $classe = '';
        for ($i = 0; $i < 5; $i++) {
          $sorteio[$i] = $jogoSimples->sorteio();
        }
      ?>
      <div class="container"><br/>
        <div class="divider"></div>
      </div>  
      <div class="section container">
        <div class="row">
          <h4 class="center">Resultado do sorteio</h4>
          <br/>
          <?php 
            for ($i = 0; $i < count($sorteio); $i++) {
              if ($jogoSimples->verificaSorteioUsuario($sorteio[$i]) == true) {
                $resultado =  '<h6 class="center"><span class="bold" style="color: #49B86E;">Você vencêu, parabéns</span><br/>Os bichos sorteados foram</h6>';
                break;
              } else {
                $resultado = '<h6 class="center"><span class="bold" style="color: #802927;">Você perdeu, tente novamente</span><br/>Os bichos sorteados foram</h6>';
              }
            }
            echo $resultado;
          ?>
          <br/>
          <div class="imagens-bicho-simples">
            <center>
              <?php 
                for ($i = 0; $i < count($sorteio); $i++) {
                  $aux = '';
                  $aux = $jogoSimples->verificaSorteioUsuario($sorteio[$i]) == true ? 'bicho-vencedor-img' : '';
                  echo '<img class="responsive-img '. $aux. '" src="img/'. $jogoSimples->bichoImagem($sorteio[$i]). '.png" alt="'. $jogoSimples->bicho($sorteio[$i]).'">';
                }
              ?>
            </center>
          </div>
          <br/>
          <div class="col s12 m8 offset-m2">
            <table class="highlight stripped centered responsive-table">
              <thead>
                <tr>
                  <th>Sorteio</th>
                  <th>Número sorteado</th>
                  <th>Bicho</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  for ($i = 0; $i < count($sorteio); $i++) {
                    if ($jogoSimples->verificaSorteioUsuario($sorteio[$i]) == true) {
                      echo '<tr style="color:#49B86E;">
                              <td>#'. ($i + 1). '</td>
                              <td>'. $sorteio[$i]. '</td>
                              <td>'. $jogoSimples->bicho($sorteio[$i]). '</td>
                            </tr>';
                    } else { echo '<tr>
                                    <td>#'. ($i + 1). '</td>
                                    <td>'. $sorteio[$i]. '</td>
                                    <td>'. $jogoSimples->bicho($sorteio[$i]). '</td>
                                  </tr>';    
                    }
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
  </main>

  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h5 class="white-text">Jogo do Bicho</h5>
          <p class="grey-text text-lighten-4">O Jogo do Bicho não é um crime, mas uma Contravenção Penal, que é basicamente um “crime anão”, como definem alguns especialistas.</p>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a target="_blank" href="https://api.whatsapp.com/send?phone=5547988819255">Mateus Lucas</a>
      </div>
    </div>
  </footer>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <script src="js/init.js"></script>

  </body>

</html>
