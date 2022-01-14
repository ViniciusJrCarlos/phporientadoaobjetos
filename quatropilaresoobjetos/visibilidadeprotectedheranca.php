<?php

    //metodo protected e private 

    class Mae
    {

        public function semSegredo()
        {

            echo "Isto todos podem saber...<br>";


        }

        protected function segredoFamiliar()
        {

            echo "Isto somente eu e minhas filhas temos acesso <br>";

        }
        private function meuSegredo()
        {

            echo "Isto somente eu sei...<br>";

        }

        public function contaTudo()
        {

            $this->segredoFamiliar();
            self::meuSegredo();

        }


    }

    $mae = new Mae();
    $mae->semSegredo();

    //protected /////////////////////
    //dessa forma não é possivel acessar chamando publicamente o protected somente poderá
    //somente poderá acessar por elementos da propria classe ou da sua classe filha.
    //$mae->segredoFamiliar();
    //protected /////////////////////
    
    //private ///////////////////////////////
    // private e protected poderá acessar somente por elementos da propria classe
    //$mae->meuSegredo();
     //private ///////////////////////////////

     //conclusao para metodos protected e private o ideal é crial uma function
     //criar um function dentro da classe MAE e passar os parametros do metodo protected ou private
     //passando o metodo private / protected usando o $this ou self::
     
     // atraves do metodo abaixo conta tudo terá o acesso as informacoes

     // tudo que for private somente elementos da classe terá acesso classes filhas não terão
     //acesso

     $mae->contaTudo();

     echo "<br>";
     echo "<hr>";
     echo "<center>Exemplo com classe extendida Filha</center>";
   
     class Filha extends Mae
    {

        // para acesso a metodos protegidos criar uma classe e trazer a function
        // vinda da classe mae
        //classe que determina que podera acessar um metodo protected
        //metodo privado não é possivel trazer nenhum informacao da classe mae e mais restrito
        //private somente acesso pela classe que o contem, filhos nao terá acesso.

        public function contaTudo()
        {
            $this->segredoFamiliar();
        
        }
    }

    $filha = new Filha();
    $filha ->semSegredo();
    $filha->contaTudo();

?>