<?php

echo '<center><h1>Formas de Mostrar Arrays com PHP</h1></center>';
echo '<br>';
echo '<pre>';
$cores1 = array(0=>'vermelho', 1=>'azul', 2=>'verde', 3=>'amarelo');
echo '<pre>';
var_dump($cores1);

$cores2 = array('verde', 'azul', 'verde', 'amarelo');
echo '<pre>';
var_dump($cores2);

$cores3 =  [ 'rosa', 'azul', 'verde', 'amarelo' ];
echo '<pre>';
var_dump($cores3);

$cores4 = array('vermelho' => 'FF0000', 'azul' => '0000FF', 'verde' => '00FF00');
echo '<pre>';
var_dump($cores4);

$vetor = array('Palio', 'Gol', 'Fiesta', 'Corsa');
echo '<pre>';
var_dump($vetor);
echo '<pre>';
?>