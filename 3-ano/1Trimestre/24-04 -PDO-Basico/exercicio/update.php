<?php

require_once 'conexao.php';
require_once 'funcoesPDO.php';

try {

    $pdo = conectar();

    $stmt = $pdo->prepare(alterarSimples('marca', 'descricao', 'codigo'));
    $stmt->bindParam(':codigo', $codigo, PDO::PARAM_STR);    
    $stmt->bindParam(':descricao', $descricao, PDO::PARAM_STR);
    $codigo = 4;    
    $descricao = 'NVIDIA';
    $stmt->execute();
    echo $stmt->rowCount();
} catch(PDOException $e) {
    echo 'Error: '. $e->getMessage();
}

?>