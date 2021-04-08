<?php

function soma(int ...$valores){

    return array_sum($valores);

}
echo '<br/>';

echo soma(2, 2);

echo '<br/>';

echo soma(20, 20);

echo '<br/>';

echo soma(25, 25);

echo '<br/>';

echo soma(30, 2);

echo '<br/>';