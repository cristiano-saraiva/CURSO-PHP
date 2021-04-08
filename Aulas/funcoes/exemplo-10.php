<?php

//Função Anonima

function teste($callback){

    //Processo lento

    $callback();



}

teste(function(){
    echo "Terminou!";
});

