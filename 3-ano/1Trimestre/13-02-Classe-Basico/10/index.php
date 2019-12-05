<?php

    include_once "enchente.class.php";

    $enchente = new enchente;
    $enchente->setCodigo(1);
    $enchente->setData("03/01/2018");
    $enchente->setNivelRio(10.0);

    print_r($enchente);

?>