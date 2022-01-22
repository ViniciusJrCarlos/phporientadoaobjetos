<?php
    class ContaPoupanca extends Conta
    {

        public $Aniversario;

        //metodo construtor sobrescrito

        function __construct ($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Aniversario)
        {

            //chamada do método construtor da classe-pai
            parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo);
            $this->Aniversario = $Aniversario;

        }

        //método construtor Retirar sobreescrito

        function Retirar($quantia)
        {

            if($this->Saldo >=$quantia)
            {   
                //executa o método da classe - pai

                parent::Retirar($quantia);

            }
            else
            {
                echo "Retirada não permitida....\n";
                return false;

            }
            // retirada permitida

            return true;

        }


    }
?>