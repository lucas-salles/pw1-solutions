<?php
    spl_autoload_register(function ($classe){
        echo "Procurando arquivo $classe.php na 1a funçao";
        if(file_exists("$classe.php"))
            require_once("$classe.php");
    });

    spl_autoload_register(function ($classe){
        echo "Procurando arquivo $classe.php no 2a função";
        if(file_exists("bixo/$classe.php"))
            require_once("bixo/$classe.php");
    });

    spl_autoload_register(function ($classe){
        echo "Procurando arquivo $classe.php no 3a função";
        if(file_exists("caracteristicas/$classe.php"))
            require_once("caracteristicas/$classe.php");
    });
?>