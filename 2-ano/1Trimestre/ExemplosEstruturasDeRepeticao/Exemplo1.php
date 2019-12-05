<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
	define("NUMEROS", 20);
	define("MINIMO", 1);
	define("MAXIMO", 60);
?>

<head>
  <meta charset="UTF-8" />
  <title>Números Aleatórios</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
	<form>
		<h3>
			<?php 
				//	Gera a semente
				mt_srand((double) microtime() * 1000000);

				echo "<b>0 --> 19:</b> <br /><br />";

				for ($i = 0; $i < NUMEROS; $i++) { 
					//	Gera o número aleatório
					echo mt_rand(MINIMO,MAXIMO)."<br />";
				}

				echo "<br /><b>20 --> 1:</b> <br /><br />";

				for ($i = NUMEROS; $i > 0; $i--) { 
					//	Gera o número Aleatórios
					echo mt_rand(MINIMO,MAXIMO)."<br />";
				}
			?>
		</h3>
	</form>
</body>

</html>
