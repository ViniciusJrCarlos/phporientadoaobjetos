<?php
    //toda vez que utilizar uma classe nativa do php deverá usar uma barra invertida
    // quando instanciar devera mudar com a barra invertida \ exemplo o DateTime ela é nativa para usar com namespace devera colocar a barrra
    //Fatal error: Uncaught Error: Class "Agora\DateTime" not found in 
    namespace Agora;

    $agora = new \DateTime;
    echo "<pre>";
    var_dump($agora);
    
?>