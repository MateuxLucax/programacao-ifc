<?php

    include_once "bicicleta.class.php";

    $bicicleta = new bicicleta;
    $bicicleta->setCodigo(1);
    $bicicleta->setFabricante("Langster");
    $bicicleta->setNumeroMarchas(3);
    $bicicleta->setFormacaoQuadro("Carbono");    

    print_r($bicicleta);

?>