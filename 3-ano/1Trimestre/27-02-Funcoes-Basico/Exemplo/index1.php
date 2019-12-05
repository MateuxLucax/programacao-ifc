<?php

    include_once "MinhasFuncoes.class.php";

    echo MinhasFuncoes::add2(1, 13);

    echo "<br/><br/>";

    echo MinhasFuncoes::sub2(5, 3);

    echo "<br/><br/>";

    echo MinhasFuncoes::getTam();

    echo "<br/><br/>";

    MinhasFuncoes::setTam(9);

    echo MinhasFuncoes::getTam();

    echo "<br/>";

    MinhasFuncoes::loopN(4);

    MinhasFuncoes::loopM(4);

    MinhasFuncoes::dataExtenso("14/04/2019");

?>
