<?php

function ola($texto = "mundo", $periodo = "Bom dia"){
    $argumentos = func_get_args();
    return $argumentos;
}

var_dump(ola("Bom dia", "meu amigo", 10));