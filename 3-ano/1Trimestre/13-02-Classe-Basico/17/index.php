<?php

    include_once "esporte.class.php";

    $esporte = new esporte;
    $esporte->setCodigo(1);
    $esporte->setNome("Futebol");
    $esporte->setNumeroPraticantes(3);

    print_r($esporte);

?>
