<!DOCTYPE html>
<html lang="pt-BR" />

<?php 
	$popA = isset($_POST['pa'])?$_POST['pa']:80000;
	$taxA = isset($_POST['ta'])?$_POST['ta']:3;
	$popB = isset($_POST['pb'])?$_POST['pb']:200000;
	$taxB = isset($_POST['tb'])?$_POST['tb']:1.5;
  $anos = 0;
?>

<head>
  <meta charset="UTF-8" />
  <title>Exercício 4</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/basico.css" />
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
</head>

<body>
	<form method="post">
    <h5>População A e B</h5>
    <hr class="dividir" />
    <div class="input">
      <input type="number" name="pa" id="pa" value="<?php echo $popA; ?>" required />
      <label for="pa">População da Cidade A</label>
    </div>
    <div class="input">
      <input type="number" name="ta" id="ta" value="<?php echo $taxA; ?>" step="0.01" required min="0" max="100" />
      <label for="ta">Taxa de Crescimento Cidade A</label>
    </div>
    <div class="input">
      <input type="number" name="pb" id="pb" value="<?php echo $popB; ?>" required />
      <label for="pb">População da Cidade B</label>
    </div>
    <div class="input">
      <input type="number" name="tb" id="tb" value="<?php echo $taxB; ?>" step="0.01" required min="0" max="100" />
      <label for="tb">Taxa de Crescimento Cidade B</label>
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
    <h5>Resultado</h5>
    <hr class="dividir" />
    <?php
    	if ($popA <= $taxA) {
        echo "<h5>A população da cidade A é menor que a taxa de cresimento.";
      } elseif ($popB <= $taxB) {
        echo "<h5>A população da cidade B é menor que a taxa de cresimento.";
      } else{
        if ($popA > $popB) {
          while ($popB <= $popA) {
            $popA = $popA + ($popA * ($taxA / 100));
            $popB = $popB + ($popB * ($taxB / 100));
            $anos = $anos + 1;
          }
          echo "<h5>As populações da Cidade B ultrapassou a da cidade A</h5>";
          echo "<ul>";
          echo "<li>Anos levados para ultrapassar: ".$anos."</li>";
          echo "<li>População cidade A: ". round($popA)."</li>";
          echo "<li>População cidade B: ". round($popB)."</li>";
        } else {
          while ($popA <= $popB) {
            $popA = $popA + ($popA * ($taxA / 100));
            $popB = $popB + ($popB * ($taxB / 100));
            $anos = $anos + 1;
          }
          echo "<h5>As populações da Cidade A ultrapassou a da cidade B</h5>";
          echo "<ul>";
          echo "<li>Anos levados para ultrapassar: ".$anos."</li>";
          echo "<li>População cidade A: ". round($popA)."</li>";
          echo "<li>População cidade B: ". round($popB)."</li>";
        }
      }
    ?>
  </form>
</body>

</html>
