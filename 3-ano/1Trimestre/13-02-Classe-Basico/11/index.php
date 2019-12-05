<?php

    include_once "jogo.class.php";

    $jogo = new jogo;
    $jogo->setCodigo(1);
    $jogo->setAnoLancamento("03/01/2018");
    $jogo->setClassificacao("Terror");

    print_r($jogo);

?>