<?php

function __autoload($nomeClass){
    // var_dump($nomeClass);
    require_once("$nomeClass.php");
}

// require_once("DelRey.php");

$carro = new DelRey();

$carro->acelerar(80);