<!DOCTYPE html>
<html lang="pt-br">

<?php
  include  'components/connect/connect.php';
  $titulo = 'Jogadores';
  $link = '../../index.php#tabela';
  $tabela = $jogadores;
?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>
        Adicionar
        <?php echo $titulo; ?>
    </title>
    <link href="components/css/material-icons.css" rel="stylesheet">
    <link rel="icon" href="components/img/favicon.png" type="image/png" />
    <link href="components/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="components/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <style media="screen">
        html {background: url('components/img/background.jpg'); background-size: cover;}
      nav ul a, nav .brand-logo {color: white;}
    </style>
</head>

<body>
    <!-- Cabeçalho -->
    <header>
        <ul id="nav-mobile" class="sidenav">
            <li><a href="index.php">Tabela</a></li>
            <li><a href="../">Projetos</a></li>
        </ul>
        <div class="navbar-fixed">
            <nav class="transparent" role="navigation">
                <div class="nav-wrapper container">
                    <a id="logo-container" href="index.php" class="brand-logo">
                        <?php echo $titulo ?></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="index.php">Tabela</a></li>
                        <li><a href="../">Projetos</a></li>
                    </ul>
                    <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Conteúdo -->
    <main>
        <div class="row" style="margin-top:8%;">
            <div class="col s12 l4 offset-l4">
                <div class="card">
                    <div class="card-action transparent">
                        <h5 class="center-align black-text">Adicionar
                            <?php echo $titulo ?>
                        </h5>
                    </div>
                    <div class="card-content transparent">
                        <form action="components/funcoes/acao.php" method="post">
                            <div class="input-field">
                                <input id="nome" type="text" name="nome" required />
                                <label for="nome">Nome</label>
                            </div>
                            <select name="posicao">
                                <option value="0" disabled selected>Posição do Jogador</option>
                                <option value="Goleiro">Goleiro</option>
                                <option value="Ala">Ala</option>
                                <option value="Líbero">Líbero</option>
                                <option value="Lateral">Lateral</option>
                                <option value="Zagueiro">Zagueiro</option>
                                <option value="Volante">Volante</option>
                                <option value="Atacante">Atacante</option>
                                <option value="Meia">Meia</option>
                            </select>
                            <div class="input-field">
                                <input id="salario" type="number" step="0.01" name="salario" />
                                <label for="salario">Salário R$</label>
                            </div>
                            <div class="input-field">
                                <input id="dataNascimento" type="text" name="dataNascimento" />
                                <label for="dataNascimento">Data de Nascimento</label>
                            </div>
                            <select name="clube">
                                <option value="0" disabled selected>Clube</option>
                                <?php 
                                    $sql = 'select * from clube order by nome';
                                    $resultado = mysqli_query($conexao, $sql);
                                    while ($tupla = mysqli_fetch_array($resultado)) {
                                        echo '<option value="', $tupla['codigo'],'" ', $aux,'>', $tupla['nome'], '</option>';
                                    } 
                                ?>
                            </select>
                            <center>
                                <input type="hidden" name="tabela" value="<?php echo $tabela; ?>">
                                <input type="hidden" name="link" value="<?php echo $link; ?>">
                                <button class="waves-effect waves-light btn-flat black-text" name="acao" value="inserir" style="margin-top: 14px;"><i class="material-icons right">send</i>Inserir</button>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Rodapé -->
    <footer class="page-footer transparent">
        <div class="footer-copyright transparent">
            <div class="container transparent right-align white-text">
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
