<?php

    $a = 75;
    $b = &$a;
    $a = 8;
    //atribuicao por referenccia ocupa o mesmo espaco em memoria o mesmo endereço
    // usa se o & e comercial;


    echo "<pre>";
    var_dump($a);
    echo "</pre>";
    var_dump($b);
    echo "<hr>";

    class cloneClasse
    {

        public $valor;

    }

    // variavel clone 

    $c = new CloneClasse;
    $c->valor = 15;
    $d = $c; //dois objetos contem o mesmo endereco de memoria
    //clone constroi a partir de um outro objeto 
    echo "<pre>";
    var_dump($c);
    echo "<pre>";
    var_dump($d);
    echo "<hr>";
   
    ////////////////////////////////////////////

    $e = new CloneClasse;

    $e->valor = 15;

    $f = clone $e;
    $f->valor = 689;

    echo "<pre>";
    var_dump($e);
    echo "<pre>";
    var_dump($f);
    echo "<hr>";
    // o clone mudou do e pra f e mudou o conteudo da propriedade valor da F mantendo uma nova variavel e nao mantendo essa referencia
    


?>