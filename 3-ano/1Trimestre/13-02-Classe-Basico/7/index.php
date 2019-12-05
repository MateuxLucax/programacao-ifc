<?php

    include_once "aluno.class.php";

    $aluno = new aluno;
    $aluno->setCodigo(1);
    $aluno->setNome("Brasil");
    $aluno->setDataNascimento("02/08/2001");
    $aluno->setCurso("Técnico em Informática");

    print_r($aluno);
        
?>