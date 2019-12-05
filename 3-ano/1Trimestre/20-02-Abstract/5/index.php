<?php

    include_once "time.class.php";

    $time = new time;
    $time->setCodigo(1);
    $time->setNome("Flamengo");
    $time->setNumeroTorcedores(32500000);
    $time->setCidade("Rio de Janeiro");

    echo $time;

?>
