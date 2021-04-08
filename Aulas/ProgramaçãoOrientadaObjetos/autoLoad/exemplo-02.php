<?php

function incluirClasses($nameClass){
    if (file_exists($nameClass.".php") === true) {
        require_once($nameClass.".php");
    }
    
}

spl_autoload_register("incluirClasses");

spl_autoload_register(function($nameClass){

    if (file_exists("Abstracts". DIRECTORY_SEPARATOR .$nameClass.".php") === true) {
       require_once("Abstracts". DIRECTORY_SEPARATOR .$nameClass.".php");

    }

});

// require_once("DelRey.php");

$carro = new DelRey();

$carro->acelerar(80);