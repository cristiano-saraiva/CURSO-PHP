<?php

function ola($texto = "mundo", $periodo = "Bom dia"){
    return "Ola $texto! $periodo<br>";
}

echo ola();
echo ola("", "Boa noite");
echo ola("Cris", "Boa tarde");
echo ola("Truta", "Bom tudo");
 