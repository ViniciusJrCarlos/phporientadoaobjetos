<?php

    include_once 'ContaCorrente.php';
    include_once 'ContaPoupanca.php';
    include_once 'ContaConjuntaCorrente.php';
    
    echo "<h1> Conta Corrente </h1>";   
    $cc = new ContaCorrente();
    echo "<pre>";
    var_dump($cc);
    echo "<pre>";
    echo "<hr>";

    echo "<h1> Movimentar C.C </h1>";   
    $cc->movimentar(-500);
    echo "<pre>";
    var_dump($cc);
    echo "<pre>";
    echo "<hr>";
    
    echo "<h1> Conta Poupanca </h1>";   
    $cp = new ContaPoupanca();
    echo "<pre>";
    var_dump($cp);
    echo "<pre>";
    echo "<hr>";

    echo "<h1> Movimentar C.P </h1>";   
    $cp->movimentar(120);
    echo "<pre>";
    var_dump($cp);
    echo "<pre>";
    echo "<hr>";

    echo "<h1> Conta Conjunta Corrente </h1>";   
    $contaConjuntaCorrente = new ContaConjuntaCorrente();
    echo "<pre>";
    $contaConjuntaCorrente->validar();
    echo "<pre>";
    var_dump($contaConjuntaCorrente);
    echo "<pre>";
    echo "<hr>";

    /*
     ancenstral e decendente 
     Conta MAE, Conta Filha e Conta NETA
     quando voce define uma classe como final ela não poderá extender ninguem ao contrario do abstract

     usando o final de uma conta filha porém existe uma ancestral a mais de classe se definir como final irá
     gerar um erro 
    Fatal error: Class ContaConjuntaCorrente may not inherit from final class (ContaCorrente)
     
    uma vez definida como final nao poderá ter mais classes filhas é a ultima geração de classe
    

    */
    
?>