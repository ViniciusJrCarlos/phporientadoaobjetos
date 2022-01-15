<?php

    include_once 'classContaAbstracao.php';

    class ContaAbstracao extends Conta
    {

        protected $limite = 1000;

        protected function setSaldo($valor)
        {

            if($valor < 0 && $this->saldo >= -$valor-$this->limite)
            {
                $this->saldo +=$valor;

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

        public function validar()
        {
            echo "Eu válido o limite <br>";
        }

        

    }

?>