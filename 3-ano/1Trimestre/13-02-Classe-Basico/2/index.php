<?php

    include_once "cliente.class.php";

    $cliente = new cliente;
    $cliente->setCodigo(1);
    $cliente->setNome("Mateus");
    $cliente->setEmail("mateusslucass840@gmail.com");
    $cliente->setTelefone(988819255);

    print_r($cliente);

?>