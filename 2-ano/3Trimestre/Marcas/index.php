<?php
  include 'components/funcoes/funcoes.php';
  $marca = isset($_GET['codigo']) ? $_GET['codigo'] : '1';
  geradorSelect('marcas', $marca, 'codigo', 'descricao', 'marcasSelect');
?>
