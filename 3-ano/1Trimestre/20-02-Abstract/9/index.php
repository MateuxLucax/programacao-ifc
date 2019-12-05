<?php

    include_once "carro.class.php";

    $carro = new carro;
    $carro->setCodigo(1);
    $carro->setAnoFabricacao("03/01/2018");
    $carro->setDataVenda("03/06/2018");
    $carro->setValor(13000);

    print_r($carro);

?>