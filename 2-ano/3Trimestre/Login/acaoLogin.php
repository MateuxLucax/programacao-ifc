<?php
  function logar($user, $senha) {
    $sql = 'SELECT * FROM '. $GLOBALS['tbLogin']. ' WHERE usuario = '. $user;
    $result = mysqli_query($GLOBALS['conexao'], $sql);
    $senhaBD = "";
    $usuario = "";
    $nome = "";

    while ($tupla = mysqli_fetch_array($result)) {
      $senhaBD = $tupla['senha'];
      $usuario = $row['usuario'];
      $nome = $tupla['nome'];
    }

    $senha = sha1($senha);
    if ($senha == $senhaBD) {
      session_start();
      $_SESSION['usuario'] = $usuario;
      $_SESSION['nome'] = $nome;
      header("location:index.php");
    } else {
      header("location:index.php");
    }
  }
?>
