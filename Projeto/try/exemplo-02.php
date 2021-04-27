<?php

function trataName($name)
{

    if (!$name) {

        throw new Exception("Nenhum nome foi informado", 400);
    }

    echo ucfirst($name) . "<br>";
}

try {
    trataName("João");
    trataName("");
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo "<br> Bloco try";
}
