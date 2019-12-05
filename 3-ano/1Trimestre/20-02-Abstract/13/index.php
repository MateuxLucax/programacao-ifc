<?php

    include_once "predio.class.php";

    $predio = new predio;
    $predio->setCodigo(1);
    $predio->setNome("Mateus");
    $predio->setNumeroSalas(6);
    $predio->setNumeroAndares(3);

    echo $predio;

?>
