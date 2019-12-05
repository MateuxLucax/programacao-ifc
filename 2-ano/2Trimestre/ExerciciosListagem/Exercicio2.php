<!DOCTYPE html>
<html lang="pt-br">

<?php
  require 'assets/connect/connect.php';
  $pesquisa = isset($_POST['pesquisa'])?$_POST['pesquisa']:'';
  $select = isset($_POST['select'])?$_POST['select']:'nenhum';
?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Listagem CRUD | Exercício 2</title>
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
        <h3 class="center">Alunos</h3>
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
                                <option value="matricula" <?php echo $select == 'matricula' ? 'selected ' : ' '; ?>>Matrícula</option>
                                <option value="aluno" <?php echo $select == 'aluno' ? 'selected ' : ' '; ?>>Aluno</option>
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
                    <table class="responsive-table centered striped">
                        <thead>
                            <tr>
                                <th>Matrícula</th>
                                <th>Aluno</th>
                                <th>Nota 1</th>
                                <th>Nota 2</th>
                                <th>Nota 3</th>
                                <th>Média</th>
                                <th>Situação</th>
                                <th>Exclusão</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($select == 'matricula' || $select == 'nenhum') {
                                if ($pesquisa != '') {
                                    $pesquisa = ' where '. $select.' = '. $pesquisa. ' order by '.$select;
                                }
                                $sql = 'select * from '. $tbAlunos. $pesquisa;
                            } elseif ($select == 'aluno') {
                                $sql = 'select * from '. $tbAlunos. ' where '. $select.' like "'. $pesquisa. '%" order by '.$select;
                            }
                            $resultado = mysqli_query($conexao, $sql);
                            ?>
                            <?php while ($row = mysqli_fetch_array($resultado)) { 
                            $media = ($row['nota1'] + $row['nota2'] + $row['nota3']) / 3;
                            ?>
                            <tr>
                                <td><?php echo $row['matricula']; ?></td>
                                <td><?php echo $row['aluno']; ?></td>
                                <td><?php echo $row['nota1'] < 7 ? '<span style="color: red;">'. number_format($row['nota1'], 1 ,',', '.'). '</span>' : '<span style="color: blue;">'. number_format($row['nota1'], 1 ,',', '.'). '</span>'; ?></td>
                                <td><?php echo $row['nota2'] < 7 ? '<span style="color: red;">'. number_format($row['nota2'], 1 ,',', '.'). '</span>' : '<span style="color: blue;">'. number_format($row['nota2'], 1 ,',', '.'). '</span>'; ?></td>
                                <td><?php echo $row['nota3'] < 7 ? '<span style="color: red;">'. number_format($row['nota3'], 1 ,',', '.'). '</span>' : '<span style="color: blue;">'. number_format($row['nota3'], 1 ,',', '.'). '</span>'; ?></td>
                                <td><?php echo number_format($media, 1 ,',', '.'); ?></td>
                                <td><?php echo $media < 7 ? '<span style="color: red;">Reprovado</span>' : '<span style="color: blue;">Aprovado</span>'; ?></td>
                                <td><a href="javascript:excluirRegistro('exclusao.php?acao=excluir&codigo=<?php echo $row['codigo']; ?>&tabela=<?php echo $tbAlunos; ?>&url=Exercicio2')"><i class="material-icons teal-text">delete</i></a></td>
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
        <li class="waves-effect"><a href="Exercicio1.php"><i class="material-icons">chevron_left</i></a></li>
        <li><a href="Exercicio1.php">1</a></li>
        <li class="active teal"><a href="Exercicio2.php">2</a></li>
        <li><a href="Exercicio3.php">3</a></li>
        <li class="waves-effect"><a href="Exercicio3.php"><i class="material-icons">chevron_right</i></a></li>
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
