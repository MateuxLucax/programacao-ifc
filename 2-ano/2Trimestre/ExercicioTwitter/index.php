<!doctype html>

<?php
    require 'assets/funcoes/func.php';
    require 'assets/connect/connect.php';
    $pesquisa = isset($_POST['pesquisa'])?$_POST['pesquisa']:'';
?>

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/css/favicon.png" type="image/x-icon" />
    <title>Twitter</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>

<body style="background-color: #e6ecf0;">

    <header style="background-color: white;">
        <nav class="navbar navbar-expand-md navbar-light container">
            <a class="navbar-brand" class="center" href="index.php"><img src="assets/css/favicon.png" width="30" alt="Twitter"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuMobile" aria-controls="menuMobile" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="menuMobile">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="index.php">Página Inicial<span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php">Moments</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php">Notificações</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php">Mensagens</a></li>
                </ul>
                <form class="form-inline mt-2 mt-md-0" method="post">
                    <input class="form-control mr-sm-2" name="pesquisa" type="text" placeholder="Buscar no Twitter" value="<?php echo $pesquisa; ?>" aria-label="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        </nav>
    </header>
<div class="col-sm-12">

<?php 
    $sqlA = 'select * from '. $tbUsuario;
    $resultado = mysqli_query($conexao, $sqlA);
    $rowA = mysqli_fetch_array($resultado);
?>

    <main role="main" class="container">
        <div class="row">
            <div class="col-sm-12 col-md-3 top-buffer">
                <div class="card">
                    <img class="card-img-top" src="assets/css/fundo.jpg" alt="Card image cap">
                    <img src="assets/css/canarinho.jpg" alt="Canarinho" class="rounded-circle perfil" width="64" height="64">
                    <div class="card-body">
                        <p class="card-text usuario-perfil"><?php echo $rowA['usuario']; ?></p>
                        <table>
                            <tr>
                                <td>Tweets&nbsp;</td>
                                <td>Seguindo</td>
                                <td>Seguidores</td>
                            </tr>
                            <tr>
                                <td><b><?php echo $rowA['tweets'] ; ?></b></td>
                                <td><b><?php echo $rowA['seguindo']; ?></b></td>
                                <td><b><?php echo $rowA['seguidores']; ?></b></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <br />
                <div class="card">
                    <div class="card-body">
                        <p class="text-left card-title"><b>Assuntos para você</b></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php 
                            $sqlB = 'select * from '. $tbAssuntos;
                            $resultado = mysqli_query($conexao, $sqlB);
                            while ($rowB = mysqli_fetch_array($resultado)) {
                        ?>
                        <li class="list-group-item"><b><?php echo $rowB['titulo']; ?></b><br /><small><?php echo $rowB['descricao']; ?></small></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 top-buffer">
            <div class="row">
                <div class="col-sm-1">
                    <img src="assets/css/canarinho.jpg" alt="Canarinho" class="rounded-circle publicar" width="32" height="32">
                </div>
                <div class="col-sm-11">
                    <form action="assets/funcoes/tweetar.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="postagem" class="form-control" placeholder="O que está acontecendo?">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit"><i class="material-icons">crop_original</i></button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <?php
                if ($pesquisa == '') {
                    $sql = 'select * from '. $tbPostagens . ' order by data desc';
                } elseif (checarUsuario($pesquisa) == 1) {
                    $sql = 'select * from '. $tbPostagens. ' where usuario like "'. $pesquisa. '%" order by usuario';
                } elseif (checarData($pesquisa) == 1){
                    $data = converterDataYmd($pesquisa);
                    $sql = 'select * from '. $tbPostagens. ' where data like "'.$data .'%" order by data desc';
                } else {
                    $sql = 'select * from '. $tbPostagens. ' where postagem like "%'. $pesquisa. '%" order by postagem';
                }
                $resultado = mysqli_query($conexao, $sql);
                while ($row = mysqli_fetch_array($resultado)) { 
            ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['usuario']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo converterData($row['data']) ?></h6>
                    <p class="card-text"><?php echo $row['postagem']; ?></p>
                    <a href="" class="card-link"><i class="material-icons">chat_bubble_outline</i><?php echo $row['comentario']; ?></a>
                    <a href="" class="card-link text-success"><i class="material-icons">sync</i><?php echo $row['retweets']; ?></a>
                    <a href="" class="card-link text-danger"><i class="material-icons">favorite_border</i><?php echo $row['curtidas']; ?></a>
                </div>
            </div>
            <?php } ?>
            </div>
            <div class="col-sm-12 col-md-3 top-buffer">
                <div class="card">
                    <div class="card-body">
                        <p class="text-left card-title"><b>Quem seguir</b></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><img src="assets/css/rothbard.jpg" alt="Rothbard" class="rounded-circle" width="32" height="32"><a href="" class="text-dark">&nbsp;&nbsp;Murray N. Rothbard</a></li>
                        <li class="list-group-item"><img src="assets/css/martin.jpg" alt="Martin" class="rounded-circle" width="32" height="32"><a href="" class="text-dark">&nbsp;&nbsp;Martin Garrix</a></li>
                        <li class="list-group-item"><img src="assets/css/elon.jpg" alt="Elon" class="rounded-circle" width="32" height="32"><a href="" class="text-dark">&nbsp;&nbsp;Elon Musk</a></li>
                    </ul>
                </div>
                <div class="top-buffer card">
                    <div class="card-body">
                        <p><small>© 2018 Twiiter Sobre Central de Ajuda Termos Política de privacidade Cookies Informações de anúncios Marca Blog Status Aplicativos Empregos Marketing Empresas Programadores</small></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>

</html>
