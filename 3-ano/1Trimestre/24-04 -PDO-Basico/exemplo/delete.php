<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=vendaSimples', "root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare('DELETE FROM marca WHERE codigo = :id');
    $stmt->bindParam(':id', $id);
    $id = 5;
    $stmt->execute();
    echo $stmt->rowCount();
} catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

?>
