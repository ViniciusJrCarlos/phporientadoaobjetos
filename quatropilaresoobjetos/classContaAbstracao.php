<?php

//classe MAE 
//classe RAIZ
//classe generica - generalizacao
//SuperClasse
//classe conta a mae não pode ser instanciada pode ser apenas extendida como resolver
//Fatal error: Uncaught Error: Cannot instantiate abstract class Conta 
/*

uma classe MAE pode ser somente extendida - somente herdada não precisa necessariamente
ter um método abstract, porém se uma classe tiver um método abstract ela deverá
ser declada obrigatoriamente como abstract....

metodo abstract não tem corpo igual de uma funcao comum - deverá estar dentro da classe
principal seja ela a MAE de todas 

exemplo: abstract protected function setSaldo($valor);

na abstração importante lembrar que tudo que tiver como caracteristica unica de mae pra filha
poderá ser implementada na propria classe extendida da MAE na filha exemplo quando tem que sacar
ou cobrar uma taxa de saque a implementacao deverá ser na filha poís poderá ter outros
tipos de contas exemplo poupanca ou corrente ou conta salario e no caso se precisar validar
algo na conta a implementacao de uma das caracteristicas vem da filha pra mae exemplo uma taxa de 3% 
do usuario X essa caracteristica e comum em ambas porém a principal é mae porque ela
possui o nome do TITULAR da conta.

se todas filhas tiver sua taxa deverá ser algo que deverá ser implementada pela MAE

*/


        /*
            nesse caso de metodo abstract a linha de baixo setSaldo poder ser declarado
            direto de cada classe filha exemplo conta corrente, conta p.p ou outro tipo de conta
            o setSaldo faz as verificacoes de limites e poderá ser definido em cada uma delas

            isso nos faz colocar o setSaldo como abstract protected que poderá ser somente instanciada...
        
        */
        // apartir do momente que eu tenho um metodo sem corpo de forma abstract a class mae conta 
        // deverá ter também o formato abstract...

      

        /*
        protected function setSaldo($valor)
        {

            if($valor < 0 && $this->saldo >= -$valor){

                $this->saldo += $valor;

            }
            if($valor > 0){

                $this->saldo += $valor;

            }


        }
        */

        include_once 'encapsulaConta.php';
    
        abstract class Conta implements encapsulaConta
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

            echo "Eu válido a Agência, Conta, Titular e Saldo <br>";

        }


    }


?>