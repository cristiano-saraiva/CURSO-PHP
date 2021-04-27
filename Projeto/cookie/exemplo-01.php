<?php

$data = array(
    "empresa" => "CS_Solucion",
    "dono"    => "Cristiano"
);

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "ok Cokie criado";