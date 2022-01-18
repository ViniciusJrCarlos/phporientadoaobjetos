<?php
    Class Pessoa
    {   
        public $Codigo;
        public $Nome;
        public $Altura;
        public $Idade;
        public $Nascimento;
        public $Escolaridade;
        public $Salario;
    
    function __construct($Codigo, $Nome, $Altura, $Idade, $Nascimento, $Escolaridade, $Salario)
    {

        $this->Codigo = $Codigo;
        $this->Nome = $Nome;
        $this->Altura = $Altura;
        $this->Idade = $Idade;
        $this->Nascimento = $Nascimento;
        $this->Escolaridade = $Escolaridade;
        $this->Salario = $Salario;

    }

    function Crescer($centimetro)
    {
        if($centimetro > 0)
        {
            $this->Altura += $centimetro;
        }
    }

    function Formar($titulacao)
    {
            $this->Escolaridade = $titulacao;

    }

    function Envelhecer($anos)
    {
        
        if($anos > 0)
        {
            $this->Idade += $anos;

        }

    }

    function __destruct()
    {

        echo "Objeto {$this->Nome} finalizando ... <br>\n";

    }

}

?>