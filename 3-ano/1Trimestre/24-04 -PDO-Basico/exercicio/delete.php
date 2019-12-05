<?php

require_once 'conexao.php';
require_once 'funcoesPDO.php';

try {

    $pdo = conectar();

    $stmt = $pdo->prepare(excluirSimples('marca', 'codigo', 'id'));
    $stmt->bindParam(':id', $id);
    $id = 6;
    $stmt->execute();
    echo $stmt->rowCount();
} catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

?>
