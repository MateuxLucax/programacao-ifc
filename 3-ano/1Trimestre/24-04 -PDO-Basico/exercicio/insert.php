<?php

require_once 'conexao.php';
require_once 'funcoesPDO.php';

try {

    $pdo = conectar();

    $stmt = $pdo->prepare(inserirSimples('marca', 'descricao'));
    $stmt->bindParam(':descricao', $descricao, PDO::PARAM_STR);
    $descricao = 'RAZER';
    $stmt->execute();
    echo $stmt->rowCount();
} catch(PDOException $e) {
    echo 'Error: '. $e->getMessage();
}

?>