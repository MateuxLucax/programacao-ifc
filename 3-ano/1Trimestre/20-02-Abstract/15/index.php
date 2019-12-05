<?php

    include_once "email.class.php";

    $email = new email;
    $email->setCodigo(1);
    $email->setOrigem("mateusslucass840@gmail.com");
    $email->setDestino("mateus.lucas840@outlook.com");
    $email->setAssunto("Caramba, tenho 2 emails");    
    $email->setData("17/02/2018");

    print_r($email);

?>