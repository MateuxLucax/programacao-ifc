<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=vendaSimples', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare('UPDATE marca SET descricao = :descricao WHERE codigo = :codigo');
    $stmt->bindParam(':codigo', $codigo, PDO::PARAM_STR);    
    $stmt->bindParam(':descricao', $descricao, PDO::PARAM_STR);
    $codigo = 7;    
    $descricao = 'Novo nome do Rodrigo - PDO';
    $stmt->execute();
    echo $stmt->rowCount();
} catch(PDOException $e) {
    echo 'Error: '. $e->getMessage();
}

?>