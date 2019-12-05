<!DOCTYPE html>
<html lang="pt-br">

<?php
    require 'assets/connect/connect.php';
    $pesquisa = isset($_POST['pesquisa'])?$_POST['pesquisa']:'';
    $select = isset($_POST['select'])?$_POST['select']:'nenhum';
    $somaGols = 0;
    $somaJogos = 0;
    $somaMedia = 0;
    $somaCopas = 0;
?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Listagem CRUD | Exercício 3</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link rel="shortcut icon" href="assets/css/favicon.png" type="image/x-icon" />
</head>

<body>
   
   <!-- Cabeçalho -->
    <header>
        <nav class="teal" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="../ExerciciosListagem/" class="brand-logo">Listagem CRUD</a>
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
        <h3 class="center">Jogadores</h3>
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <table class="responsive-table centered striped">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Seleção</th>
                                <th>Gols</th>
                                <th>Jogos</th>
                                <th>Média</th>
                                <th>Copas</th>
                                <th>Exclusão</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = 'select * from '.$tbJogadores;
                            $resultado = mysqli_query($conexao, $sql);
                            ?>
                            <?php while ($row = mysqli_fetch_array($resultado)) { 
                                $media = $row['gols'] / $row['jogos'];
                                $somaGols += $row['gols'];
                                $somaJogos += $row['jogos'];
                                $somaMedia += $media;
                                $somaCopas += $row['copas'];
                            ?>
                            <tr>
                                <td><?php echo $row['codigo']; ?></td>
                                <td><?php echo $row['nome']; ?></td>
                                <td><?php echo $row['selecao']; ?></td>
                                <td><?php echo $row['gols']; ?></td>
                                <td><?php echo $row['jogos']; ?></td>
                                <td><?php echo number_format($media, 2, ',' ,'.'); ?></td>
                                <td><?php echo $row['copas']; ?></td>
                                <td><a href="javascript:excluirRegistro('exclusao.php?acao=excluir&codigo=<?php echo $row['codigo']; ?>&tabela=<?php echo $tbJogadores; ?>&url=Exercicio3')"><i class="material-icons teal-text">delete</i></a></td>
                            </tr>
                            <?php } ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><?php echo $somaGols; ?></td>
                                <td><?php echo $somaJogos; ?></td>
                                <td><?php echo number_format($somaMedia, 2, ',' ,'.'); ?></td>
                                <td><?php echo $somaCopas; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <!-- Páginas -->
    <ul class="pagination center">
        <li class="waves-effect"><a href="Exercicio2.php"><i class="material-icons">chevron_left</i></a></li>
        <li><a href="Exercicio1.php">1</a></li>
        <li><a href="Exercicio2.php">2</a></li>
        <li class="active teal"><a href="Exercicio3.php">3</a></li>
        <li class="disabled"><a href="#"><i class="material-icons">chevron_right</i></a></li>
    </ul>
    
    <!-- Rodapé -->
    <footer class="page-footer teal">
        <div class="container">
            © 2018 Mateus Lucas <br /> &nbsp;
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="assets/js/materialize.js"></script>
    <script src="assets/js/init.js"></script>
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
