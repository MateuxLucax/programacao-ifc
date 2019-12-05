<!DOCTYPE html>
<html lang="pt-br">

<?php
    $inicializar = isset($_POST['inicializar']) ? $_POST['inicializar'] : '';
    $anosContribuicao = isset($_POST['anosContribuicao']) ? $_POST['anosContribuicao'] : null;
    $idade = isset($_POST['idade']) ? $_POST['idade'] : null;
    $grupoTrabalhador = isset($_POST['grupoTrabalhador']) ? $_POST['grupoTrabalhador'] : 'nenhum';
    $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : 'nenhum';

?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Previsão de Aposentadoria</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png" />

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
                <a href="index.php" class="brand-logo truncate">Previsão de Aposentadoria</a>
            </div>
        </div>
    </nav>
</header>

<main>
    <div class="section">
        <div class="container">
            <h5 class="center">Insira suas informações</h5>
            <form method="POST" action="index.php">
                <div class="row">
                    <div class="col s12 m6">
                        <div class="input-field">
                            <input id="anosContribuicao" type="number" min="1" name="anosContribuicao" max="100" class="validate" value="<?php echo $anosContribuicao ?>" required>
                            <label for="anosContribuicao">Anos de contribuição</label>
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <div class="input-field">
                            <input id="idade" type="number" min="1" max="150" name="idade" class="validate" value="<?php echo $idade ?>" required>
                            <label for="idade">Idade</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m6">
                        <div class="input-field">
                            <select name="grupoTrabalhador" required>
                                <option value="0" <?php echo $grupoTrabalhador == 0 ? 'selected' : ''; ?> disabled>Selecione uma opção</option>
                                <option value="1" <?php echo $grupoTrabalhador == 1 ? 'selected' : ''; ?>>Rural</option>
                                <option value="2" <?php echo $grupoTrabalhador == 2 ? 'selected' : ''; ?>>Urbano</option>
                                <option value="3" <?php echo $grupoTrabalhador == 3 ? 'selected' : ''; ?>>Professor</option>
                            </select>
                            <label>Grupo de trabalhador</label>
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <div class="input-field">
                            <select name="sexo" required>
                                <option value="0" <?php echo $sexo == 0 ? 'selected' : ''; ?> disabled>Selecione uma opção</option>
                                <option value="1" <?php echo $sexo == 1 ? 'selected' : ''; ?>>Feminino</option>
                                <option value="2" <?php echo $sexo == 2 ? 'selected' : ''; ?>>Masculino</option>
                            </select>
                            <label>Sexo</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 center">
                    <button class="btn waves-effect waves-light" type="submit" name="inicializar" value="1">Calcular<i class="material-icons right">send</i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php 

        function calculaAposentadoria($minimoIdade, $idade, $anosContribuicao, $minimoContribuicao) {
            $anoAtual = date("Y");
            $anosRestantes = $minimoIdade - $idade;
            if ($anosRestantes <= 0 && $anosContribuicao >= $minimoContribuicao) {
                return "Você já pode se aposentar";
            } elseif ($anosRestantes > 0 || $anosContribuicao < $minimoContribuicao) {
                $anosRestantesDeContribuicao = $minimoContribuicao - $anosContribuicao;
                if ($anosRestantesDeContribuicao > $anosRestantes) {
                    $anoAposentadoria = $anoAtual + $anosRestantesDeContribuicao;
                    $idade += $anosRestantesDeContribuicao;
                } else {
                    $anoAposentadoria = $anoAtual + $anosRestantes;
                    $idade += $anosRestantes;
                }
                return "Você poderá se aposentar em ". $anoAposentadoria. ", aos ". $idade. " anos de idade";
            }
        }

        if ($inicializar == 1) {
            if ($grupoTrabalhador == 1) {
                $minimoContribuicao = 20;
                $minimoIdade = 60;
                $aposentadoria = calculaAposentadoria($minimoIdade, $idade, $anosContribuicao, $minimoContribuicao);
            } elseif ($grupoTrabalhador == 2) {
                if ($sexo == 1) {
                    $minimoContribuicao = 30;
                    $minimoIdade = 62;
                    $aposentadoria = calculaAposentadoria($minimoIdade, $idade, $anosContribuicao, $minimoContribuicao);
                } else {
                    $minimoContribuicao = 35;
                    $minimoIdade = 65;
                    $aposentadoria = calculaAposentadoria($minimoIdade, $idade, $anosContribuicao, $minimoContribuicao);
                }
            } elseif ($grupoTrabalhador == 3) {
                $minimoIdade = 60;
                if ($sexo == 1) {
                    $minimoContribuicao = 30;
                    $aposentadoria = calculaAposentadoria($minimoIdade, $idade, $anosContribuicao, $minimoContribuicao);
                } else {
                    $minimoContribuicao = 35;
                    $aposentadoria = calculaAposentadoria($minimoIdade, $idade, $anosContribuicao, $minimoContribuicao);
                }
            }

    ?>
    <div class="divider"></div>
    <div class="section">
        <div class="container">
            <h4 class="center"><?php echo $aposentadoria; ?></h4>
        </div>
    </div>
    <?php
        }
    ?>
</main>

<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h5 class="white-text">Previsão de Aposentadoria</h5>
                <p class="grey-text text-lighten-4"></p>
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
