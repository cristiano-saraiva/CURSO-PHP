<?php

//Função com passagen e tipagem de parametros

function soma(float ...$valores):float {

    return array_sum($valores);

}
echo '<br/>';

var_dump(soma(2, 2)) ;

echo '<br/>';

var_dump(soma(20, 20)) ;

echo '<br/>';

var_dump(soma(1.5, 3.2)) ;
