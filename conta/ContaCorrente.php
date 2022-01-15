<?php
    //classe Especifica 
    //subclasse sobrescreve a classe MAE com alguma funcao especifica se tratada de outra  forma
    // da original

    include_once 'Conta.php';
     
    class ContaCorrente extends Conta
    {

        protected $limite = 1000;
        
        //novo set saldo especifico pra essa conta mesmo sendo herdado da MAE
        // classe filha sobreescreve a da MAE houve entao o overrinding sobrescrendo a classe anterior
        protected function setSaldo($valor)
        {

            if($valor < 0 && $this->saldo >= -$valor-$this->limite)
            {

                $this->saldo += $valor;


            }
            if($valor > 0)
            {

                $this->saldo += $valor;

            }



        }
        protected function taxa()
        {

            $this->saldo = $this->saldo - ($this->saldo * 0.03);


        }
        //sobrescrita
        public function validar()
        {

            echo "Eu Válido o Limite <br> ";

        }

    }
    

?>