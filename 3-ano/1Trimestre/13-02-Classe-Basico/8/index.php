<?php

    include_once "funcionario.class.php";

    $funcionario = new funcionario;
    $funcionario->setCodigo(1);
    $funcionario->setNome("Mateus");
    $funcionario->setDataAdmissao("03/06/2018");
    $funcionario->setSalario(1300);

    print_r($funcionario);

?>