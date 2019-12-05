<?php

    include_once "vendedor.class.php";

    $vendedor = new vendedor;
    $vendedor->setCodigo(1);
    $vendedor->setLogin("MateuxLucax");
    $vendedor->setSenha("123456789");
    $vendedor->setNome("Mateus");
    $vendedor->setEmail("mateusslucass840@gmail.com");
    $vendedor->setTelefone(988819255);

    print_r($vendedor);

?>