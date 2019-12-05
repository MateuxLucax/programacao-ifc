<?php 
  require 'conf/conf.inc.php';

  $conexao = mysqli_connect($url, $usuario, $senha, $bancoDeDados);

  if (mysqli_connect_errno())
    echo mysqli_connect_error();
?>