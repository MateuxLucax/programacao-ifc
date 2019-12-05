<?php

// SELECT

// Realiza uma busca simples na tabela, apresentando todos os parâmentros da mesma
function buscaSimples($tabela) {
    return "SELECT * FROM ". $tabela;
}

// Realiza uma busca seletivamente
function buscaSeletiva($tabela, $colunas) {
    for ($i = 0; count($colunas); $i++) {
        if ($i == count($colunas - 1))
            $colunasSelecionadas .= $colunas[$i];
        $colunasSelecionadas .= $colunas[$i] . ', ';
    }
    return 'SELECT '. $colunasSelecionadas. ' FROM '. $tabela;
}

// INSERT

// Realiza uma inserção com apenas 1 parâmetro
function inserirSimples($tabela, $parametro) {
    return 'INSERT INTO '. $tabela. ' ('. $parametro. ') VALUES (:'. $parametro.')';
}

// UPDATE

// Altera apenas um parêmtro
function alterarSimples($tabela, $parametro, $condicao) {
    return 'UPDATE '. $tabela. ' SET '. $parametro. ' = :'. $parametro. ' WHERE '. $condicao. ' = :' .$condicao;
}

// DELETE

// Exclui apenas 1 parâmetro
function excluirSimples($tabela, $parametro, $valor) {
    return 'DELETE FROM '. $tabela. ' WHERE '. $parametro. ' = :'. $valor;
}

?>
