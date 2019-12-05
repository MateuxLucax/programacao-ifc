<?php

    include_once "pais.class.php";

    $pais = new pais;
    $pais->setCodigo(1);
    $pais->setNome("Brasil");
    $pais->setSigla("BR");
    $pais->setContinente("América do Sul");

    echo $pais;

?>
