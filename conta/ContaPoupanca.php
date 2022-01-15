<?php
 //classe Especifica 
    include_once 'Conta.php';
     
    class ContaPoupanca extends Conta
    {

        protected $dataAniversario;
        
        //novo set saldo especifico pra essa conta mesmo sendo herdado da MAE

        protected function setSaldo($valor)
        {
            // fará o saque levando em conta o aniversario da conta.
            if($valor < 0 && $this->saldo >= -$valor)
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

            $this->saldo = $this->saldo - ($this->saldo * 0.01);


        }

    }
    

?>