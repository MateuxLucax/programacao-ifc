<!DOCTYPE html>
<html lang="pt-br">

<?php
  include_once "simples.class.php";
  $inicializar = isset($_POST['jogar']) ? $_POST['jogar'] : false;
  $bichoUsuario = isset($_POST['bicho']) ? $_POST['bicho'] : 0;
?>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Grupo Simples | Jogo do Bicho</title>

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
            <li class="active"><a href="simples.php">Grupo Simples</a></li>
            <li><a href="milhar.php">Milhar</a></li>
          </ul>
        </div>
      </div>
    </nav>
  
    <ul class="sidenav" id="navbar-mobile">
      <li><a href="index.html">Página Inicial</a></li>
      <li class="active"><a href="simples.php">Grupo Simples</a></li>
      <li><a href="milhar.php">Milhar</a></li>
    </ul>
  </header>

  <main>
    <div class="section">
      <div class="row">
        <div class="container">
          <h4 class="center">Grupo Simples</h4>
          <form method="POST">
            <div class="input-field col s12 m6 offset-m3">
              <select class="icons" name="bicho" required>
              <option value="0" <?php  echo $bichoUsuario == 0 ? 'selected ': '' ?> disabled>Escolha sua opção</option>
              <option value="1" <?php  echo $bichoUsuario == 1 ? 'selected ': '' ?> data-icon="img/avestruz.png">Avestruz</option>
              <option value="2" <?php  echo $bichoUsuario == 2 ? 'selected ': '' ?> data-icon="img/aguia.png">Águia</option>
              <option value="3" <?php  echo $bichoUsuario == 3 ? 'selected ': '' ?> data-icon="img/burro.png">Burro</option>
              <option value="4" <?php  echo $bichoUsuario == 4 ? 'selected ': '' ?> data-icon="img/borboleta.png">Borboleta</option>
              <option value="5" <?php  echo $bichoUsuario == 5 ? 'selected ': '' ?> data-icon="img/cachorro.png">Cachorro</option>
              <option value="6" <?php  echo $bichoUsuario == 6 ? 'selected ': '' ?> data-icon="img/cabra.png">Cabra</option>
              <option value="7" <?php  echo $bichoUsuario == 7 ? 'selected ': '' ?> data-icon="img/carneiro.png">Carneiro</option>
              <option value="8" <?php  echo $bichoUsuario == 8 ? 'selected ': '' ?> data-icon="img/camelo.png">Camelo</option>
              <option value="9" <?php  echo $bichoUsuario == 9 ? 'selected ': '' ?> data-icon="img/cobra.png">Cobra</option>
              <option value="10" <?php  echo $bichoUsuario == 10 ? 'selected ': '' ?> data-icon="img/coelho.png">Coelho</option>
              <option value="11" <?php  echo $bichoUsuario == 11 ? 'selected ': '' ?> data-icon="img/cavalo.png">Cavalo</option>
              <option value="12" <?php  echo $bichoUsuario == 12 ? 'selected ': '' ?> data-icon="img/elefante.png">Elefante</option>
              <option value="13" <?php  echo $bichoUsuario == 13 ? 'selected ': '' ?> data-icon="img/galo.png">Galo</option>
              <option value="14" <?php  echo $bichoUsuario == 14 ? 'selected ': '' ?> data-icon="img/gato.png">Gato</option>
              <option value="15" <?php  echo $bichoUsuario == 15 ? 'selected ': '' ?> data-icon="img/jacare.png">Jacaré</option>
              <option value="16" <?php  echo $bichoUsuario == 16 ? 'selected ': '' ?> data-icon="img/leao.png">Leão</option>
              <option value="17" <?php  echo $bichoUsuario == 17 ? 'selected ': '' ?> data-icon="img/macaco.png">Macaco</option>
              <option value="18" <?php  echo $bichoUsuario == 18 ? 'selected ': '' ?> data-icon="img/porco.png">Porco</option>
              <option value="19" <?php  echo $bichoUsuario == 19 ? 'selected ': '' ?> data-icon="img/pavao.png">Pavão</option>
              <option value="20" <?php  echo $bichoUsuario == 20 ? 'selected ': '' ?> data-icon="img/peru.png">Peru</option>
              <option value="21" <?php  echo $bichoUsuario == 21 ? 'selected ': '' ?> data-icon="img/touro.png">Touro</option>
              <option value="22" <?php  echo $bichoUsuario == 22 ? 'selected ': '' ?> data-icon="img/tigre.png">Tigre</option>
              <option value="23" <?php  echo $bichoUsuario == 23 ? 'selected ': '' ?> data-icon="img/urso.png">Urso</option>
              <option value="24" <?php  echo $bichoUsuario == 24 ? 'selected ': '' ?> data-icon="img/veado.png">Veado</option>
              <option value="25" <?php  echo $bichoUsuario == 25 ? 'selected ': '' ?> data-icon="img/vaca.png">Vaca</option>
              </select>
              <label>Selecione o Bicho</label>
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
        $jogoSimples->setBichoUsuario($bichoUsuario);
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
