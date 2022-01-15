<?php

interface encapsulaConta
{

    public function movimentar($valor);
    public function verSaldo();
    public function validar();


}

//colocar dentro de uma capsula e o encapsular

/*
 - toda classe deve ter sua interface, todos comentarios
- na implementacao poderia criar um interface
com getter e setter interage com os metodos da interface

são metodos que precisam ser implementadas pela classe que for implementar essa interface
parte da classe que conversa com a aplicação

gerenciar dependencias encapsulo a classe definindo e protegendo propriedades e metodos
e é definido qual parte ira interagir com externo 
e implementa

a interface são chamadas publicamente atraves dos metodos publicos que estao nessa interface

*/


?>