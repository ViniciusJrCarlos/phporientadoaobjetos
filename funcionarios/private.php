<?php
   
    include_once 'classes/Funcionario.class.php';

    $vinicius = new Funcionario;

    $vinicius->SetSalario(879.89);

    echo 'Salário Private: (R$) ' . $vinicius->GetSalario();

?>