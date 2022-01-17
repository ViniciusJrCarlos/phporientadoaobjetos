<?php

// namespace se tras a arvore de diretórios representa a arvore de diretorios aonde está as classes.
// a constante namespace retorna a qual instancia voce está 
Namespace Aluno;

class Teste
{
    function __construct()
    {
        echo " Estou na namespace Aluno <hr> ";
    }

}
echo __NAMESPACE__ . " <br> ";
//$a = new Teste;

Namespace Aluno\PHP;

class Teste
{
    function __construct()
    {

        echo "Estou na namespace Aluno PHP <hr> ";

    }

}
echo __NAMESPACE__ . " <br> ";
//$b = new Teste;

Namespace Aluno\Mysql;
class Teste
{
        function __construct()
        {

            echo "Estou na namespace Aluno Mysql <hr> ";
        }

}
echo __NAMESPACE__ . " <br> ";
///$c = new Teste;

#####################################
//namespaces com mesmo nome colidiriam porém ao instanciar com mesmo nome porém no caminho absoluto é acessado normalmente
//usando alias com use para instanciar classes no mesmo nome.

echo "<br>";
echo "<hr>";
$a = new \Aluno\Teste;
$b = new \Aluno\PHP\Teste;
$c = new \Aluno\Mysql\Teste;

echo "<br>";
echo "<hr>";

/// caminho dentro da namespace 

use \Aluno\Teste as aa;
use \Aluno\PHP\Teste as bb;
use \Aluno\Mysql\Teste as cc;

$aateste = new aa;
$bbteste = new bb;
$ccteste = new cc;


?>