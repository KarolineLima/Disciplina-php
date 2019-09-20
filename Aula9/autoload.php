<?php



spl_autoload_register(function ($classe){
    echo 'Procurando arquivo $classe.php na 1a função';
    if(file_exists("$classe.php"))
        require_once("$classe.php");
});

spl_autoload_register(function ($classe){
    echo 'Procurando arquivo $classe.php na 2a função';
        require_once("bixo/$classe.php");
});




function f($classe){
    echo 'Procurando arquivo $classe.php na 1a função';
    require_once("$classe.php");
}

?>