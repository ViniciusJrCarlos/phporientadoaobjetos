<?php

    include_once "classes/Funcionario.class.php";
    include_once "classes/Estagiario.class.php";

    $estagiario = new Estagiario;
    $estagiario->SetSalario(250.89);

    echo 'O Salario do Estagiario Protected é (R$): ' . $estagiario->GetSalario() . "\n";

?>