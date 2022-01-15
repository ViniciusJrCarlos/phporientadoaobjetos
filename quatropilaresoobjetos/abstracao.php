<?php

    include_once 'contaAbstracao.php';
    $conta = new ContaAbstracao();
   // $conta = new Conta();

    //$conta->movimentar(100);
    echo "<pre>";
   // var_dump($conta);
   var_dump($conta);
    echo "</pre>";
    echo "<hr>";
    echo "<h2>Saldo</h2>";
    echo $conta->verSaldo();

?>