<?php

    class ContaCorrente extends Conta
    {

        public $Limite;

        //método construtor sobrescrito agora inicializa a variavel $limite

        function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Limite)
        {

            //chamada do método construtor da classe - pai
            parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo);
            $this->Limite = $Limite;


        }
        //método retirar sobrescrito verifica se a quantia está dentro do limiite
        function Retirar($quantia)
        {

            //imposto sobre a movimentação financeira

            $cpmf = 0.05;

            if( ($this->Saldo + $this->Limite) >= $quantia )
            {
                //executa método da classe - pai
                parent::Retirar($quantia);

                //debita o imposto
                parent::Retirar($quantia * $cpmf);
            
            }
            else
            {
                echo "Retirada não permitida...\n";
                return false;
            }

            //retirada permitida
            return true;
        }
    }


?>