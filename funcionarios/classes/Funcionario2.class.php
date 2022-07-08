<?php

    class Funcionario
    {

        private   $Codigo;
        public    $Nome;
        private   $Nascimento;
        protected $Salario;

        function SetSalario($Salario)
        {

            //verifica se é numero positivo

            if(is_numeric($Salario) and ($Salario > 0))
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