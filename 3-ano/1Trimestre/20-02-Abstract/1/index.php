<?php

    include_once "estado.class.php";

    $estado = new estado;
    $estado->setCodigo(1);
    $estado->setNome("Santa Catarina");
    $estado->setSigla("SC");

    echo $estado;

?>
