<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
	$usuario = isset($_POST['u'])?$_POST['u']:"Carlinhos da Meia Noite";
	$senha = isset($_POST['s'])?$_POST['s']:69;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercício 2</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
	<form method="post">
    <h5>Login</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="text" name="u" id="u" value="<?php echo $usuario; ?>" required />
      <label for="u">Usuário</label>
    </div>
    <div class="input">
      <input type="password" name="s" id="s" value="<?php echo $senha; ?>" required />
      <label for="s">Senha</label>
    </div>
    <div class="input">
      <input type="submit" value="Enviar Dados" />
      <input type="reset" value="Limpar" />
    </div>
  </form>
  <br />
  <br />
  <br />
  <br />
  <form>
    <h5>Mensagem</h5>
    <hr class="dividir" />
    <?php
    	if ($usuario == $senha) {
    		$resultado = "Senha inválida, digite novamente...Seu energumino!!!";
    	} elseif ($usuario != $senha) {
    		$resultado = "Senha correta, parabéns seu acéfalo!!!";
    	} else {
    		$resultado = "Azedo a marmita";
    	}
    ?>
    <br />
    <h5><?php echo $resultado; ?></h5>
  </form>
</body>

</html>
