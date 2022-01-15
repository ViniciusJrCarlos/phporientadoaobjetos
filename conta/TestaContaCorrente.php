<?php

    include_once 'ContaCorrente.php';
    include_once 'ContaPoupanca.php';
   
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
    
?>