<?php

$pessoas = array(
'nome' => 'João',
'idade'=> 20
);

foreach ($pessoas as &$value) { /* por referencia a varievel muda o valor */

    if (gettype($value) === 'integer') $value += 10;

    echo $value. '<br>';

}

print_r($pessoas);