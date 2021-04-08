<?php

spl_autoload_register(function($nameClass){

    $dirClass = "class";
    $fileName = str_replace ("\\", "/", $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php");

    if (file_exists($fileName)) {

       require_once($fileName);

    } 

});