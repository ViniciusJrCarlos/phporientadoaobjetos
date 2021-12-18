<?php  

   /*
   //exemplo 1 
   class Pessoas{
     
    public $nome, $apelido, $idade;

   }
   // fim exemplo 1
   */

   // exemplo 2 - utiiza o set para tratar e retornar uma informacao 
   /*

    class Pessoas{

     public $nome, $apelido, $idade;

     public function setNome($nome){

        $this->nome = strtolower($nome);
     }


    }
     // fim exemplo 2

     */

     // exemplo 3 get usado para recuperar as informacoes digitadas, controla a forma que devolvemos os dados

     class Pessoas{

        public $nome, $apelido, $idade;
   
        public function setNome($nome){
   
           $this->nome = strtolower($nome);
        }

        public function getNome(){

            return ucwords($this->nome);

        }
   
   
       }

    //fim exemplo3




?>