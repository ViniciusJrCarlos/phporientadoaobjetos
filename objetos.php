<?php

#carrega as classes

include_once "processacontaphp/class/Pessoa.class.php";
include_once "processacontaphp/class/Conta.class.php";

//$carlos = new Pessoa;

/*

$carlos->Codigo = 10;
$carlos->Nome = "Vinicius Carlos";
$carlos->Altura = 1.85;
$carlos->Idade = 25;
$carlos->Nascimento = "24/04/1984";
$carlos->Escolaridade = "pós graduação";
$carlos->Salario = 567.89;
*/

#criacao de objetos $carlos segunda forma

$carlos = new Pessoa (10, "Vinicius Carlos", 1.85, 37, "24/04/1984", "Superior", 650.00);

echo "Manipulando o objeto {$carlos->Nome} :<br>\n ";

echo " {$carlos->Nome} é formado em: {$carlos->Escolaridade} <br>\n ";
$carlos->Formar('Técnico em Eletricidade');
echo " {$carlos->Nome} é formado em: {$carlos->Escolaridade} <br>\n ";

echo " {$carlos->Nome} possui {$carlos->Idade} anos <br>\n ";
$carlos->Envelhecer(1);
echo " {$carlos->Nome} possui atualmente {$carlos->Idade} anos <br>\n ";


#criacao do objeto $conta_carlos
/*
$conta_carlos = new Conta;
$conta_carlos->Agencia = 6677;
$conta_carlos->Codigo = "CC.1234.56";
$conta_carlos->DataDeCriacao = "10/10/02";
$conta_carlos->Titular = $carlos;
$conta_carlos->Senha = 9877;
$conta_carlos->Saldo = 567.89;
$conta_carlos->Cancelada = false;
*/

#criacao de objeto conta carlos

$conta_carlos = new Conta(6677, "CC.1234.56", "10/10/02", $carlos, 9877, 567.89);
echo "<br>\n";
echo "Manipulação a conta de: {$conta_carlos->Titular->Nome}: <br>\n ";

echo "O saldo atual é R\$ {$conta_carlos->ObterSaldo()} <br>\n ";

$conta_carlos->Depositar(200.00);
echo " O Saldo atual é R\$ {$conta_carlos->ObterSaldo()} <br>\n ";

$conta_carlos->Retirar(100.00);
echo " O Saldo atual é R\$ {$conta_carlos->ObterSaldo()} <br>\n ";

?>