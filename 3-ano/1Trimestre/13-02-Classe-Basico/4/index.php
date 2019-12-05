<?php

    include_once "jogador.class.php";

    $jogador = new jogador;
    $jogador->setCodigo(1);
    $jogador->setNome("Mateus");
    $jogador->setTime("Flamengo");
    $jogador->setPosicao("Zagueiro");
    $jogador->setNumeroGols(24);

    print_r($jogador);

?>