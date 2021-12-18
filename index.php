<?php

    require_once("classes/pessoas.php");
   
    /*
    //exemplo 1
    $pessoa1 = new Pessoas;
   
    $pessoa1->nome = "Vinicius";
    $pessoa1->apelido = "Vinny";
    $pessoa1->idade = "37 anos";

    $pessoa2 = new Pessoas;

    $pessoa2->nome = "Alana";
    $pessoa2->apelido = "Nana";
    $pessoa2->idade = "29 anos";


    echo "O nome da primeira pessoa é: ".$pessoa1->nome;
    echo "<br>";
    echo "O nome da segunda pessoa é: ".$pessoa2->nome;

    //var_dump($pessoa1);
    //fim exemplo 1
    */
    
    /*
    //exemplo 2 utilizando o set
    $pessoa1 = new Pessoas;
    
    $pessoa1->setNome("Vinicius Carlos");
   // $pessoa1->apelido = "Vinny";
   // $pessoa1->idade = "37 anos";
    
    

    echo  "O nome da primeira pessoa é: ".$pessoa1->nome;
    echo "<br>";

    //fim exemplo 2
    */


    /*
    //exemplo3 utilizando o get para o retorno diferente do original usando o metodo set na saida do resultado

    $pessoa1 = new Pessoas;
    
    $pessoa1->setNome("Vinicius carlos");
    $pessoa1->apelido = "Vinny";
    $pessoa1->idade = "37 anos";
    
    

    echo  "O nome da primeira pessoa é: ".$pessoa1->getNome();
    echo "<br>";


    // fim exemplo 3

    */

    //exemplo 4 usando o metodo construct

    $pessoa1 = new Pessoas("Vinicius carlos", "Vinny", "37 anos");
    echo  "O nome da primeira pessoa é: ".$pessoa1->getNome();
    echo "<br>";

    //fim exemplo 4

?>