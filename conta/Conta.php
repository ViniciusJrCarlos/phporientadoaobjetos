<?php

//classe MAE 
//classe RAIZ
//classe generica - generalizacao
//SuperClasse
//classe conta a mae não pode ser instanciada pode ser apenas extendida como resolver

    include_once 'ContaInterface.php';

    abstract class Conta implements ContaInterface
    {
        
        private $agencia;
        private $conta;
        private $titular;
        protected $saldo=1000;
       
        abstract protected function setSaldo($valor);
        abstract protected function taxa();
    
        protected function getSaldo()
        {

            return $this->saldo;

        }

        public function movimentar($valor)
        {

            $this->setSaldo($valor);

        }

        public function verSaldo(){

            return $this->getSaldo();

        }

        public function validar()
        {

            echo 'Eu válido a Agência, Conta, Titular e Saldo <br>';

        }

        


    }


?>