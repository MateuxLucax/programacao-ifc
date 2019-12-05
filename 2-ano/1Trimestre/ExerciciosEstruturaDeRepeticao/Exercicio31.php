<!DOCTYPE html>
<html lang="pt-BR" />

<?php
  for ($i=0; $i < 10 ; $i++) { 
    $n[$i] = isset($_POST['n'.$i])?$_POST['n'.$i]:1;
    $a[$i] = isset($_POST['a'.$i])?$_POST['a'.$i]:150;
  }
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercício 31</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
  <form method="post">
    <h5>alunos</h5>
    <hr class="dividir" />
    <?php 
      for ($i = 0; $i < 10 ; $i++) { 
        echo "<div class='input'>
              <input type='number' name='n".$i."' id='n".$i."' required />
              <label for='n".$i."'>Número do Aluno ".($i + 1)."</label>
            </div>
            <div class='input'>
              <input type='number' name='a".$i."' id='a".$i."'  required />
              <label for='a".$i."'>Altura do Aluno ".($i + 1)."</label>
            </div>";
      }
      echo "<div class='input'>
              <input type='submit' value='Enviar Dados' />
              <input type='reset' value='Limpar' />
            </div>";
      ?>
  </form>
  <br />
  <br />
  <br />
  <br />
  <form>
    <h5>Resultado</h5>
    <hr class="dividir" />
    <h5>
    <?php
      $alunoBaixo = $n[0];
      $alunoAlto = 0;
      $maior = 0;
      $menor = $a[0];
      for ($i = 0; $i < 10; $i++) { 
        if ($a[$i] > $maior) {
          $alunoAlto = $n[$i];
          $maior = $a[$i];
        }
        if ($a[$i] < $menor) {
          $alunoBaixo = $n[$i];
          $menor = $a[$i];
        }
      }
      echo "<br /><center>O aluno com a maior altura (".$maior." cm) tem código ".$alunoAlto;
      echo "<br />O aluno com a menor altura (".$menor." cm) tem código ".$alunoBaixo."</center>";
    ?>
    </h5>
  </form>
</body>

</html>
