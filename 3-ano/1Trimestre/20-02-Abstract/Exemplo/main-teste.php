<?php

    include_once "marca.class.php";

    $marca = new marca;
    $marca->setCodigo(1);
    $marca->setDescricao("IFC");

    echo $marca;

?>
