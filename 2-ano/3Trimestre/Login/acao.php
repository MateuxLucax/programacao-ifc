<?php
  include 'connect/connect.php';
  include 'funcoes.php';

  $acao = isset($_GET['acao'])?$_GET['acao']:$_POST['acao'];
  if ($acao == 'logoff') {
    session_start();
    session_destroy();
    header("location:login.php");
  } elseif ($acao == 'login') {
    $user = $_POST['user'];
    $senha = $_POST['pass'];
    logar($user, $senha);
  }
?>
