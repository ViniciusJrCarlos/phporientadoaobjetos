<?php

    spl_autoload_register(
        function($class){
            include_once("class/{$class}.class.php");
        }
    );

?>