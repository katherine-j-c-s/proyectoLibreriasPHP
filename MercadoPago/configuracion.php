<?php

$PROYECTO = 'pwd-unco-2024';


spl_autoload_register(function($clase){
    $directorioBase = __DIR__ . "./";
    if (file_exists($directorioBase . str_replace('\\', '/', $clase) . '.php')){
        require_once $directorioBase . str_replace('\\', '/', $clase) . '.php';
    }
});



?>