<?php

    class Estagiario extends Funcionario
    {

        function GetSalario()
        {
            return $this->Salario * 1.12;
        }

    }
    
?>