<?php

class ContaPoupanca extends Conta
{

    public $aniversario;

    //metodo sobrescrito

    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Aniversario)
    {

        //chamada da classe pai

        parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo);

        $this->Aniversario = $Aniversario;


    }

    //metodo Retirar Sobrescrito do Pai

    function Retirar($quantia)
    {
        if($this->Saldo >= $quantia)
        {
            // Executa o método da classe-pai

            parent::Retirar($quantia);

        }
        else
        {
            echo "Retirada não permitida....\n";
            return false;
        }

        // retirada permitida

        return true;
    }

    function Transferir($Conta, $Valor)
    {
        if($this->Retirar($Valor))
        {
            $Conta->Depositar($Valor);
        }

    }

}

?>