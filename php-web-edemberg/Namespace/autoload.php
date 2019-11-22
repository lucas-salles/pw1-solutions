<?php
    spl_autoload_register(function ($classe){
        echo "Procurando arquivo $classe.php na 1a funçao";
        $arquivo = str_replace("\\",'/',$classe);
        if(file_exists("$arquivo.php")){
            require_once("$arquivo.php");
        }
    });
?>