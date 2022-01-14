
<?php

    //herança é a primeira das 4 bases do orientado a objetos, herança,abstracao,poliformismo,encapsulamento.
    //private pertence somente a classe pessoa
    //classe aluno não tera acesso 
    // a herança abstrai ao maximo todas propriedades comuns
    //a todos objetos criados da class principal
    //
    
    class Pessoa{


        public $nome;
        protected $sexo;
        private $idade;

    }

    $pessoa1 = new Pessoa;
    echo "<pre>";
    var_dump($pessoa1);
    echo "<pre>";

    echo "<hr>";

    class Aluno extends Pessoa
    {

        public $curso = ["programação web", "Internet"];
        public $materias = ['python', 'ruby', 'c#'];

    }

    $aluno1 = new Aluno;
    echo "<pre>";
    var_dump($aluno1);
    echo "<pre>";

    echo "<hr>";

    class Professor extends Pessoa{

        public $materias = ['php', 'mysql', 'js'];
        public $curso  = ["redes de computadores", "Internet"];

    }

    // 3 objeto da classe pessoa com todos elementos da classe principal e 
    $prof1 = new Professor;


    echo "<pre>";
    var_dump($prof1);

    echo "<pre>";



?>
