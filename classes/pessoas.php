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

class MyClass{

    public $public = "public";
    protected $protected = "protected";
    private $private = "private";

    function printHello(){

        echo $this->public ."<br>";
        echo $this->protected ."<br>";
        echo $this->private ."<br>";
    }
}
// exemplo 8 a class pai Myclass passa as caracteristicas para Myclass2 e conseguimos acessar de forma extendida
    // as caracteristicas herdadas do objeto protegido nesse caso Myclass2 extends Myclass
    
class Myclass2 extends MyClass{

    public $public = "public 2";
    protected $protected = "protected 2 - só poderá ser acessada se for estendida da classe pai Myclass para a sua Classe que foi criada class Myclass2 extends MyClass";
    private $private = "private2 - só poderá ser acessada 1 vez de dentro da propria classe criada";
    function printHello(){

        echo $this->public ."<br>";
        echo $this->protected ."<br>";
        echo $this->private ."<br>";
    }


}

//fim exemplo 8

//exemplo 9 classe abstrata

abstract class ClassAbstrata{

    abstract protected function getValor();
    abstract protected function valorPrefixo($prefixo);

    public function imprimir(){
        echo $this->getValor();
    }

}
class ClassConcreta extends ClassAbstrata{

    protected function getValor(){

        return " Classe Concreta ";

    }
    public function valorPrefixo($prefixo, $separador = '.'){

        return $prefixo. "Classe concreta";

    }


}

// fim exemplo 9



?>