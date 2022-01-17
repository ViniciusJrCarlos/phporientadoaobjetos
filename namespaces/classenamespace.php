<?php
    // Fatal error: Cannot declare class Teste, because the name is already in use é gerado o erro por conta da classe estar duplicada
    // comm namespace atribuido na classe é possivel rodar sem erro mesmo sendo o mesmo nome da classe
   // cada classe vai sozinha dentro do arquivo a namespace vai dentro do arquivo que contem a classe 
   // subnamespace diretorio dentro de diretorio, exemplo diretorio imagens e um subdiretorio imagem festa, viagem
    Namespace Aluno;
    class Teste
    {

        function __construct()
        {
            echo "estou na namespace Aluno <br> ";

        }

    }

    $a = new Teste;

    Namespace Professor;
    class Teste
    {
        function __construct()
        {

        echo "estou na namespace Professor <br> ";
        
        }

    }
    $b = new Teste;
?>