<?php
    include_once 'classes/Estagiario2.class.php';
    include_once 'classes/Funcionario2.class.php';

    $estagiario = new Estagiario;
    $estagiario->SetSalario(250.89);

    echo 'O salário do Pedrinho é R$: ' . $estagiario->GetSalario() . "\n";
    
?>