<?php

    function __autoload($class)
    {
        include_once("class/$class.class.php");
    }

    //include_once "class/Html.class.php";
    $html = new Html;

?>