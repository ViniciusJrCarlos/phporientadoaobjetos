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

     /*
     // exemplo 3 get usado para recuperar as informacoes digitadas, controla a forma que devolvemos os dados

     class Pessoas{

        public $nome, $apelido, $idade;

        // quando definido o metodo construct ele passa a ser superior aos demais function.
  
        public function setNome($nome){
   
           $this->nome = strtolower($nome);
        }

        public function getNome(){

            return ucwords($this->nome);

        }
   
   
       }


    //fim exemplo3
    */
     
    /*
    // exemplo 4 usando metodo construt 
    
    class Pessoas{

        public $nome, $apelido, $idade;

            public function __construct($nome, $apelido, $idade){


                $this->nome = strtolower($nome);
                $this->apelido = strtolower($apelido);
                $this->idade = strtolower($idade);
            }
          
            public function setNome($nome){
    
                $this->nome = strtolower($nome);
            }
    
            public function getNome(){
    
                return ucwords($this->nome);
    
            }

    // fim exemplo 4
    */

    
    /*
    //exemplo 5 usando heranças 
     
    class Pessoas {


        public $nome, $apelido, $idade;

        public function setNome($nome, $apelido, $idade){
            $this->nome = strtolower($nome);
            $this->apelido = strtolower($apelido);
            $this->idade = strtolower($idade);

        }
        public function getNome(){
            return ucwords(this->nome);
            
        }


    }
    class Brasileiro extends Pessoas{

        public $departamento, $cidade;

    }
    class Argentino extends Pessoas{

        public $comunidade, $regiao;

    }

    // fim exemplo 5

    */

   //exemplo 6 usando heranças 
     
   class Pessoas {


    public $nome, $idade;
    public $apelido1, $apelido2;

    public function setNome($nome){
        $this->nome = strtolower($nome);
        //$this->apelido = strtolower($apelido);
        //$this->idade = strtolower($idade);

    }

    public function getNome(){
        return ucwords(this->nome);
        
    }

    public function setApelido($apelido1, $apelido2){

        $this->apelido1 = $apelido1;
        $this->apelido2 = $apelido2;

    }
    public function getApelido(){

        return $this->apelido1 . " " . $this->apelido2;
    }


}
    class Brasileiro extends Pessoas{

        public $departamento, $cidade;

        public function setApelido($apelido1, $apelido2){

            $this->apelido1 = $apelido2;
            $this->apelido2 = $apelido1;
    
        }

    }
    
    class Argentino extends Pessoas{

        public $comunidade, $regiao;

    }

// fim exemplo 6



?>