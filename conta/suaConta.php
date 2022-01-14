<?php

    include_once ("Conta.php");
    
    $conta = new Conta();
    echo "<h1> Saldo </h1>";
    echo "<pre>";
    var_dump($conta);
    echo "<pre>";
    echo "<hr>";

    $conta->movimentar(-150);
    echo "<h1> Movimentar Conta </h1>";
    echo "<pre>";
    var_dump($conta);
    echo "<pre>";
    echo "<hr>";

    
    echo "<h1> Ver Saldo </h1>";
    $conta->verSaldo();
    echo "<pre>";
    var_dump($conta);
    echo "<pre>";
    echo "<hr>";

?>