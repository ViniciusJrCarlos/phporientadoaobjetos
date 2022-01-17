<?php
    //tostring - ao tentar printar um objeto direto dará um erro
    //manda printar um objeto direto a classe interrompe e faz um interseccao
    //metodo to string dentro da classe tras corretamente printa direttamente sem
    //precisar chamar outro metodo chamaando aleatoriamente
    class MinhaData extends DateTime
    {

        function __toString()
        {

            return $this->format("d/m/Y");

        }


    }

    $tempo = new MinhaData();
   // echo $tempo->format("d/m/Y");
    echo "<pre>";
    var_dump($tempo);
    echo "</pre>";
?>