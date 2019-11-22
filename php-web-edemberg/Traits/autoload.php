<?php
function f($classe){
    echo 'Procurando arquivo $classe.php';
    require_once("$classe.php");
}
spl_autoload_register("f");

?>