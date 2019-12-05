<!DOCTYPE html>
<html lang="pt-BR" />
<?php $x= 10; $y = 10; $z = 20; $n = "10"; $contA = 0; $contB = 7; $v = false; $tx1 = "Rodr"; $tx2 = "igo"; ?>
<head>
  <meta charset="UTF-8" />
  <title>Exemplo 1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form>
    <h5>Exemplos de Operadores</h5>
    <h5>Verificação</h5>
    <hr class="dividir" />
    <ul>
      <li><?php echo $x.' == '.$y.' resposta ('.($x == $y).')'; ?></li>
      <li><?php echo $x.' == '.$n.' resposta ('.($x == $n).')'; ?></li>
      <li><?php echo $x.' === '.$n.' resposta ('.($x === $n).')'; ?></li>
      <li><?php echo $x.' != '.$z.' resposta ('.($x != $z).')'; ?></li>
      <li><?php echo $x.' <> '.$z.' resposta ('.($x <> $z).')'; ?></li>
      <li><?php echo $x.' !== '.$n.' resposta ('.($x !== $n).')'; ?></li>
      <li><?php echo $x.' > '.$z.' resposta ('.($x > $z).')'; ?></li>
      <li><?php echo $x.' < '.$z.' resposta ('.($x < $z).')'; ?></li>
      <li><?php echo $x.' <= '.$y.' resposta ('.($x <= $y).')'; ?></li>
      <li><?php echo $x.' >= '.$y.' resposta ('.($x >= $y).')'; ?></li>
      <br />
      <h5>Contadores</h5>
      <hr class="dividir" />
      <br />
      <li><?php echo $contA; ?></li>
      <li><?php echo ++$contA; ?></li>
      <li><?php echo $contA++; ?></li>
      <li><?php echo $contA; ?></li>
      <li><?php echo $contB; ?></li>
      <li><?php echo --$contB; ?></li>
      <li><?php echo $contB--; ?></li>
      <li><?php echo $contB; ?></li>
      <br />
      <h5>And</h5>
      <hr class="dividir" />
      <br />
      <li>
        <?php if (($x == 10) && ($y == 10)) {
                echo "Foi";
              } else {
                echo "Azedo a marmita";
              }
          ?>
      </li>
      <br />
      <h5>Or</h5>
      <hr class="dividir" />
      <br />
      <li>
        <?php
          if (($x == $y) || ($y == 10)) {
            echo "Foi";
          } else {
            echo "Azedo a marmita";
          }
        ?>
      </li>
      <br />
      <h5>True</h5>
      <hr class="dividir" />
      <br />
      <li>
        <?php
          if (!$v == true) /* Pode ser também if ($v) { echo "Foi"; } */ {
            echo "Foi";
          } else {
            echo "Azedo a marmita";
          }
        ?>
      </li>
      <br />
      <h5>Xor</h5>
      <hr class="dividir" />
      <br />
      <li>
        <?php
          if (($x == 10) xor ($y == 10)) {
            echo "Foi";
          } else {
            echo "Azedo a marmita";
          }
        ?>
      </li>
      <br />
      <h5>Concatenação</h5>
      <hr class="dividir" />
      <br />
      <li>
        <?php
          $tx1 .=  $tx2;
          echo $tx1;
        ?>
      </li>
      <br />
      <h5>Constante</h5>
      <hr class="dividir" />
      <br />
      <li>
        <?php
          define('TAM',100);
          echo TAM;
          echo "<br />";
          echo constant ("TAM");
        ?>
      </li>
    </ul>
  </form>
</body>

</html>
