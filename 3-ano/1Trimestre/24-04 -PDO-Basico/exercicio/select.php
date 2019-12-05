<?php 

require_once 'conexao.php';
require_once 'funcoesPDO.php';

try {

    $pdo = conectar();

    $consulta = $pdo->query(buscaSimples($tabela));

    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        echo "Código: {$linha['codigo']} - Descrição: {$linha['descricao']}<br/>";
    }
} catch(PDOException $e) {  
    echo 'Error: '. $e->getMessage();
}

?>