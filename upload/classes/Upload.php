<?php

Class Upload
{
    static public function verificaTamanho($arquivo, $tamanho)
    {

        if($arquivo['size'] <= $tamanho){

            return true;
        }
        else{

            return false;

        }


    }

    static public function verificaTipo($arquivo, $tipos)
    {

        foreach($tipos as $tipo)
        {   

            if($arquivo['type'] == $tipo){
                
                return true;

            }

        }

        return false;

    }

    static public function subir($arquivo, $tamanho, $tipos)
    {


    

        if(!self::verificaTamanho($arquivo, $tamanho))
        {

            return  "Tamanho Inválido....";


        }
        if(!self::verificaTipo($arquivo, $tipos))
        {

            return "Tipo inválido....";

        }

        move_uploaded_file($arquivo['tmp_name'], "imagens/$arquivo[name]");

        return "upload feito com sucesso.....";


    }

}
?>
