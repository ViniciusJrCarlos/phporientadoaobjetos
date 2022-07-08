<?php

    class Funcionario
    {

        private $Codigo;
        public  $Nome;
        private $Nascimento;
        private $Salario;
        

        
        function SetSalario($Salario)
        {   //verifica se e numerico e positivo
            if(is_numeric($Salario)and ($Salario> 0))
            {
                $this->Salario = $Salario;

            }

        }
        function GetSalario()
        {
            return $this->Salario;
        }
    }
?>