<?php

    include_once "cilindro.class.php";

    $cilindro = new Cilindro;

    $cilindro->setRaio(7.65);
    $cilindro->setAltura(16.89);
    $cilindro->setNivelSeguranca(2);

    echo $cilindro;

?>