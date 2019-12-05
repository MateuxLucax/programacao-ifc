<!DOCTYPE html>
<html lang="pt-br">

<?php
  require 'connect/connect.php';
  $pesquisa = isset($_POST['pesquisa'])?$_POST['pesquisa']:'';
  $select = isset($_POST['select'])?$_POST['select']:'nenhum';
?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Exclusão CRUD | Exercício 11</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link rel="shortcut icon" href="css/favicon.png" type="image/x-icon" />
</head>

<body>
   
   <!-- Cabeçalho -->
    <header>
        <nav class="teal" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="../ExerciciosExclusaoCRUDConfirmar/" class="brand-logo">Exclusão CRUD</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="../../">Projetos</a></li>
                </ul>
                <ul id="nav-mobile" class="sidenav teal white-text">
                    <li><a href="../../" class="white-text">Projetos</a></li>
                </ul>
                <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>
        </nav>
    </header>
    
    <!-- Conteúdo -->
    <main>
        <h3 class="center">Prédios</h3>
        <div class="container">
            <div class="row">
                <div class="col s12 m4">
                    <form class="col s12" method="post">
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">search</i>
                                <input id="pesquisa" name="pesquisa" type="text" value="<?php echo $pesquisa; ?>" />
                                <label for="pesquisa">Pesquisar</label>
                            </div>
                        </div>
                        <div class="input-field">
                            <select name="select">
                                <option value="nenhum" disabled  <?php echo $select == 'nenhum' ? 'selected ' : ' '; ?>>Escolha uma opção:</option>
                                <option value="codigo" <?php echo $select == 'codigo' ? 'selected ' : ' '; ?>>Código</option>
                                <option value="nome" <?php echo $select == 'nome' ? 'selected ' : ' '; ?>>Nome</option>
                                <option value="numero_salas" <?php echo $select == 'numero_salas' ? 'selected ' : ' '; ?>>Número de Salas</option>
                                <option value="numero_andares" <?php echo $select == 'numero_andares' ? 'selected ' : ' '; ?>>Número de Andares</option>
                            </select>
                            <label>Filtro de Pesquisa</label>
                        </div>
                        <div class="input-field col s12">
                            <button class="btn waves-effect waves-light right" type="submit">Enviar
                        <i class="material-icons right">send</i>
                        </button>
                        </div>
                    </form>
                </div>
                <div class="col s12 m8">
                    <table class="responsive-table highlight centered">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Número de Salas</th>
                                <th>Número de Andares</th>
                                <th>Exclusão</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($select == 'codigo' || $select == 'nenhum' || $select == 'numero_andares' || $select == 'numero_salas') {
                                if ($pesquisa == '') {
                                    $pesquisa = '';
                                } else {
                                    $pesquisa = ' where '. $select.' = '. $pesquisa. ' order by '.$select;
                                }
                                $sql = 'select * from '. $tb_predio. $pesquisa;
                            } elseif ($select == 'nome') {
                                $sql = 'select * from '. $tb_predio. ' where '. $select.' like "'. $pesquisa. '%" order by '.$select;
                            }
                            $resultado = mysqli_query($conexao, $sql);
                            while ($row = mysqli_fetch_array($resultado)) { ?>
                            <tr>
                                <td><?php echo $row['codigo']; ?></td>
                                <td><?php echo $row['nome']; ?></td>
                                <td><?php echo $row['numero_andares']; ?></td>
                                <td><?php echo $row['numero_salas']; ?></td>
                                <td><a href="javascript:excluirRegistro('exclusao.php?acao=excluir&codigo=<?php echo $row['codigo']; ?>&tabela=<?php echo $tb_predio; ?>&url=Exercicio13')"><i class="material-icons teal-text">delete</i></a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <!-- Páginas -->
    <ul class="pagination center">
        <li class="waves-effect"><a href="Exercicio12.php"><i class="material-icons">chevron_left</i></a></li>
        <li><a href="Exercicio1.php">1</a></li>
        <li><a href="Exercicio2.php">2</a></li>
        <li><a href="Exercicio3.php">3</a></li>
        <li><a href="Exercicio4.php">4</a></li>
        <li><a href="Exercicio5.php">5</a></li>
        <li><a href="Exercicio6.php">6</a></li>
        <li><a href="Exercicio7.php">7</a></li>
        <li><a href="Exercicio8.php">8</a></li>
        <li><a href="Exercicio9.php">9</a></li>
        <li><a href="Exercicio10.php">10</a></li>
        <li><a href="Exercicio11.php">11</a></li>
        <li><a href="Exercicio12.php">12</a></li>
        <li class="active teal"><a href="Exercicio13.php">13</a></li>
        <li><a href="Exercicio14.php">14</a></li>
        <li><a href="Exercicio15.php">15</a></li>
        <li><a href="Exercicio16.php">16</a></li>
        <li><a href="Exercicio17.php">17</a></li>
        <li class="waves-effect"><a href="Exercicio14.php"><i class="material-icons">chevron_right</i></a></li>
    </ul>
    
    <!-- Rodapé -->
    <footer class="page-footer teal">
        <div class="container">
            © 2018 Mateus Lucas <br /> &nbsp;
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
    <script type="text/javascript">
        function excluirRegistro(url) {
            if (confirm("Deseja realmente excluir?")) {
                window.location.href = url;
            }
        }
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems, options);
        });
        $(document).ready(function() {
            $('select').formSelect();
        });
    </script>

</body>

</html>
