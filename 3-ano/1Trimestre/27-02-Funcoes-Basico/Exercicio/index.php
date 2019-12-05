<?php

    include_once "funcionario.class.php";

    $funcionario = new funcionario;
    $funcionario->setUsuario("MateuxLucax");
    $funcionario->setSenha("DuArSkit150");
    $funcionario->setNome("Mateus");
    $funcionario->setEmail("mateusslucass840@gmail.com");
    $funcionario->setDataNascimento();
    $funcionario->setTrabVal(30, 20);
    $funcionario->setTrabVal(30, 20);
    $funcionario->setTrabVal(50, 20);
    $funcionario->setTrabVal(40, 30);
    $funcionario->setTrabVal(30, 20);

    print_r($funcionario);

    echo "<br/><br/>";

    echo "Salário por mês: ";
    print_r($funcionario->salarioMes());

    echo "<br/><br/>";

    echo "Soma dos salários: ". $funcionario->somaSalario();

    echo "<br/><br/>";

    echo "Média dos salários: ". $funcionario->mediaSalario();

    echo "<br/><br/>";

    echo "Maiores salários: ";
    print_r($funcionario->nMaioresSalarios(3));

    echo "<br/><br/>";

    echo "Menores salários: ";
    print_r($funcionario->nMenoresSalarios(3));

    echo "<br/><br/>";

    echo "Meses trabalhados: ".$funcionario->mesesTrabalhados();

    echo "<br/><br/>";

    echo "Anos trabalhados: ". $funcionario->anosTrabalhados();
?>
