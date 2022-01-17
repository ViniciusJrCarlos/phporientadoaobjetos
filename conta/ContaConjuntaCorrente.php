<?php


    include_once 'ContaCorrente.php';
    class ContaConjuntaCorrente extends ContaCorrente
    {

        private $titular2;

        public function validar()
        { 

           //esse parent abaixo pega a function da filha contaCorrente 
            parent::validar();
            echo " Eu valido o 2º titular <br> ";


        }



    }

?>