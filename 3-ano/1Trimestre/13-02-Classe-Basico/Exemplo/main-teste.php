<?php

    include_once "marca.class.php";

    $marca = new marca;
    $marca->setCodigo(10);
    $marca->setCodigo(-10);
    $marca->setDescricao("IFC");
    $marca->setDescricao("I");

    echo $marca;

?>