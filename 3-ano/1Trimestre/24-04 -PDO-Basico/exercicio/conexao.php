<?php 

// Realiza a conexão com o banco de dados
function conectar($SGBD = null, $host = null, $nomeBancoDeDados = null, $usuario = null, $senha = null) {
    
    // Váriaveis relacionadas ao Banco de Dados
    $SGBD = isset($SGBD) ? $SGBD : 'mysql';
    $host = isset($host) ? $host : 'localhost';
    $nomeBancoDeDados = isset($nomeBancoDeDados) ? $nomeBancoDeDados : 'vendaSimples';
    $usuario = isset($usuario) ? $usuario : 'root';
    $senha = isset($senha) ? $senha : '';

    // Conectar ao BD
    $pdo = new PDO(($SGBD. ':host='. $host. ';dbname='. $nomeBancoDeDados), $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;

}

?>