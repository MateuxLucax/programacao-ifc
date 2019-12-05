<?php

    include_once "escola.class.php";

    $escola = new escola;
    $escola->setCodigo(1);
    $escola->setNome("IFC - UU");
    $escola->setCidade("Rio do Sul");
    $escola->setNumeroAlunos(40);    
    $escola->setNomeDiretora("Aline");

    print_r($escola);

?>