<?php
    include_once 'abstratoconta/conta/Conta.class.php';
    include_once 'abstratoconta/conta/Pessoa.class.php';
    include_once 'abstratoconta/conta/ContaPoupanca.class.php';


    $carlos = new Pessoa(10, "Vinicius Carlos", 1.85, 37, 84, "Pós Graduado", 650.00);
   
    echo "Manipulando o objeto {$carlos->Nome} :<br>\n ";

    echo " {$carlos->Nome} é formado em: {$carlos->Escolaridade} <br>\n ";
    $carlos->Formar('Técnico em Eletricidade');
    echo " {$carlos->Nome} é formado em: {$carlos->Escolaridade} <br>\n ";
    
    echo " {$carlos->Nome} possui {$carlos->Idade} anos <br>\n ";
    $carlos->Envelhecer(1);
    echo " {$carlos->Nome} possui atualmente {$carlos->Idade} anos <br>\n ";
   
   echo "<hr>";
   echo "<br>";

   $conta_carlos = new ContaPoupanca(6677, "CP.1234.56", "10/07/02", $carlos, 9877, 500.00, "10/07");

   echo "<br>\n";
   echo "Manipulação a conta de: {$conta_carlos->Titular->Nome}: <br>\n ";

   echo "O saldo atual é R\$ {$conta_carlos->ObterSaldo()} <br>\n ";

   $conta_carlos->Depositar(200.00);
   echo " O Saldo atual é R\$ {$conta_carlos->ObterSaldo()} <br>\n ";

   $conta_carlos->Retirar(100.00);
   echo " O Saldo atual é R\$ {$conta_carlos->ObterSaldo()} <br>\n ";


?>