<?php

    include_once "computador.class.php";

    $computador = new computador;
    $computador->setCodigo(1);
    $computador->setFabricante("Dell");
    $computador->setProcessador("Intel Core i5");
    $computador->setMemoria(6144);
    $computador->setHd(1024);

    print_r($computador);

?>