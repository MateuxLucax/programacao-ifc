<?php
// Verifica se existe a variável txtnome
if (isset($_GET["txtnome"])) {
    $nome = $_GET["txtnome"];
    // Conexao com o banco de dados
    $server = "localhost";
    $user = "root";
    $senha = "";
    $base = "Agenda";
    $conexao = mysqli_connect($server, $user, $senha, $base) or die("Erro na conexão!");
    // Verifica se a variável está vazia
    if (empty($nome)) {
        $sql = "SELECT * FROM Contato";
    } else {
        $nome .= "%";
        $sql = "SELECT * FROM Contato WHERE NOME like '$nome'";
    }
    sleep(1);
    $result = mysqli_query($conexao, $sql);
    $cont = mysqli_affected_rows($conexao);
    // Verifica se a consulta retornou linhas 
    if ($cont > 0) {
        // Atribui o código HTML para montar uma tabela
        $tabela = "<table border='1'>
                    <thead>
                        <tr>
                            <th>NOME</th>
                            <th>TELEFONE</th>
                            <th>CELULAR</th>
                            <th>EMAIL</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>";
        $return = "$tabela";
        // Captura os dados da consulta e inseri na tabela HTML
        while ($linha = mysqli_fetch_array($result)) {
            $return.= "<td>" . utf8_encode($linha["NOME"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["FONE"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["CELULAR"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["EMAIL"]) . "</td>";
            $return.= "</tr>";
        }
        echo $return.="</tbody></table>";
    } else {
        // Se a consulta não retornar nenhum valor, exibi mensagem para o usuário
        echo "Não foram encontrados registros!";
    }
}
?>