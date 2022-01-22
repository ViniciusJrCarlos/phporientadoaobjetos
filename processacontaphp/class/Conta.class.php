<?php

    class Conta
    {

        public $Agencia;
        public $Codigo;
        public $DataDeCriacao;
        public $Titular;
        public $Senha;
        public $Saldo;
        public $Cancelada;

        function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo)
        {

            $this->Agencia = $Agencia;
            $this->Codigo = $Codigo;
            $this->DataDeCriacao = $DataDeCriacao;
            $this->Titular = $Titular;
            $this->Senha = $Senha;
            // chamada de outro metodo da classe
            
            $this->Depositar($Saldo);
            $this->Cancelada = false;


        }

        function Retirar($quantia)
        {
            if($quantia > 0)
            {
                $this->Saldo -= $quantia;

            }

        }

        function Depositar($quantia)
        {
            if($quantia > 0)
            {
                $this->Saldo += $quantia;

            }

        }

        function ObterSaldo()
        {

            return $this->Saldo;

        }
        function __destruct()
        {
    
            echo "Objeto da conta {$this->Codigo} de {$this->Titular->Nome} finalizando ... <br>\n";
            echo "<br>";
            echo "<hr>";
        }
    


    }

?>