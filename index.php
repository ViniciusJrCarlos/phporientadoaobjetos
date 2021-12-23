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
   
    /*
    //exemplo 4 usando o metodo construct

    $pessoa1 = new Pessoas("Vinicius carlos", "Vinny", "37 anos");
    echo  "O nome da primeira pessoa é: ".$pessoa1->getNome();
    echo "<br>";
    echo "<hr>";
    //fim exemplo 4
    */
    
    /*
    // exemplo 5 usando heranças

    $brasileiro = new Brasileiro;
    $brasileiro->setNome("Vinicius Carlos", "Vinny", "37 anos");

    var_dump($brasileiro);

    //fim exemplo 5
  
    */


    
     // exemplo 6 usando heranças

     $brasileiro = new Brasileiro;
     //$brasileiro->setNome("Vinicius Carlos", "Vinny", "37 anos");
     
     $brasileiro->setApelido("Vinicius", "Carlos");
     
     //var_dump($brasileiro);
     
     echo $brasileiro->getApelido();
     echo "<br>";
     //fim exemplo 6
    

    // exemplo 7 encapsulamento
    // nesse exemplo retorna somente o objeto como publico, private e protected
    // não retorna dados porque devem estar dentro do mesmo escopo, veja o exemplo 8

    $objeto = new MyClass;
     
    echo $objeto->public;
    echo "<br>";
   // echo $objeto->protected;
    echo "<br>";
    //echo $objeto->private;

    // exemplo 8 a class pai Myclass passa as caracteristicas para Myclass2 e conseguimos acessar de forma extendida
    // as caracteristicas herdadas do objeto protegido nesse caso Myclass2 extends Myclass
    
    $objeto2 = new MyClass2;
    $objeto2->printHello();
    echo "<br>";
    //fim exemplo 8

    //exemplo 9 classe abstrata

    $classe1= new ClassConcreta();
    echo "<br>";

    //$classe1 = new ClassConcreta;
    $classe1->imprimir();
    echo $classe1->valorPrefixo('kkkkkkkkkkkkkkk'); 
    // fim exemplo 9

?>