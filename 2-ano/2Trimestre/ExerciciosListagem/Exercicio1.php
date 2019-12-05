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
    <title>Listagem CRUD | Exercício 1</title>
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
        <h3 class="center">Saltos</h3>
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
                                <option value="salto1" <?php echo $select == 'salto1' ? 'selected ' : ' '; ?>>Salto 1</option>
                                <option value="salto2" <?php echo $select == 'salto2' ? 'selected ' : ' '; ?>>Salto 2</option>
                                <option value="salto3" <?php echo $select == 'salto3' ? 'selected ' : ' '; ?>>Salto 3</option>
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
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Salto 1</th>
                                <th>Salto 2</th>
                                <th>Salto 3</th>
                                <th>Total</th>
                                <th>Média</th>
                                <th>Exclusão</th>
                            </tr>
                        </thead>
                        <tbody> 
                            <?php
                            if ($select == 'codigo' || $select == 'nenhum') {
                                if ($pesquisa != '') {
                                    $pesquisa = ' where '. $select.' = '. $pesquisa. ' order by '.$select;
                                }
                                $sql = 'select * from '. $tbSaltos. $pesquisa;
                            } elseif ($select == 'nome') {
                                $sql = 'select * from '. $tbSaltos. ' where '. $select.' like "'. $pesquisa. '%" order by '.$select;
                            } elseif ($select == 'salto1' || $select == 'salto2' || $select == 'salto3') {
                                if ($pesquisa == '') {
                                    $pesquisa = '';
                                } else {
                                    $pesquisa = ' where '. $select.' >= '. $pesquisa. ' order by '.$select;
                                }
                                $sql = 'select * from '. $tbSaltos. $pesquisa;
                            }
                            $resultado = mysqli_query($conexao, $sql);
                            ?>
                            <?php while ($row = mysqli_fetch_array($resultado)) { 
                            $maior1 = $row['salto1'];
                            $maior2 = $row['salto2'];
                            $maior3 = $row['salto3'];
                            $menor1 = $row['salto1'];
                            $menor2 = $row['salto2'];
                            $menor3 = $row['salto3'];
                            if ($row['salto1'] > $maior1) {
                                $maior1 = $row['salto1'];
                            }
                            if ($row['salto2'] > $maior2) {
                                $maior2 = $row['salto2'];
                            } 
                            if ($row['salto3'] > $maior3) {
                                $maior3 = $row['salto3'];
                            }
                            if ($row['salto1'] < $menor1) {
                                $menor1 = $row['salto1'];
                            }
                            if ($row['salto2'] < $menor2) {
                                $menor2 = $row['salto2'];
                            }
                            if ($row['salto3'] < $menor3) {
                                $menor3 = $row['salto3'];
                            }
                            $total = $row['salto1'] + $row['salto2'] + $row['salto3'];
                            $media = $total / 3;
                            ?>
                            <tr>
                                <td><?php echo $row['codigo']; ?></td>
                                <td><?php echo $row['nome']; ?></td>
                                <td><?php echo number_format($row['salto1'], 2 ,',', '.'); ?></td>
                                <td><?php echo number_format($row['salto2'], 2 ,',', '.'); ?></td>
                                <td><?php echo number_format($row['salto3'], 2 ,',', '.'); ?></td>
                                <td><?php echo number_format($total, 2 ,',', '.'); ?></td>
                                <td><?php echo number_format($media, 2 ,',', '.'); ?></td>
                                <td><a href="javascript:excluirRegistro('exclusao.php?acao=excluir&codigo=<?php echo $row['codigo']; ?>&tabela=<?php echo $tbSaltos; ?>&url=Exercicio1')"><i class="material-icons teal-text">delete</i></a></td>
                            </tr>
                            <?php } ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><b>Maior Salto 1</b></td>
                                <td><?php echo number_format($maior1, 2 ,',', '.'); ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><b>Maior Salto 2</b></td>
                                <td><?php echo number_format($maior2, 2 ,',', '.'); ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><b>Maior Salto 3</b></td>
                                <td><?php echo number_format($maior3, 2 ,',', '.'); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <!-- Páginas -->
    <ul class="pagination center">
        <li class="disabled"><a href="#"><i class="material-icons">chevron_left</i></a></li>
        <li class="active teal"><a href="Exercicio1.php">1</a></li>
        <li><a href="Exercicio2.php">2</a></li>
        <li><a href="Exercicio3.php">3</a></li>
        <li class="waves-effect"><a href="Exercicio2.php"><i class="material-icons">chevron_right</i></a></li>
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
