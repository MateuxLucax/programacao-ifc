<!DOCTYPE html>
<html lang="pt-BR" />

<head>
  <meta charset="UTF-8" />
  <title>Exercício 1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
	<form method="post" action="Exercicio2.php">
    <h5>Quantidade de Valores</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="qtd" id="qtd" required />
      <label for="qtd">Quantidade de Valores</label>
    </div>
    <div class="input">
      <input type="submit" value="Enviar Dados" />
      <input type="reset" value="Limpar" />
    </div>
  </form>
</body>

</html>
