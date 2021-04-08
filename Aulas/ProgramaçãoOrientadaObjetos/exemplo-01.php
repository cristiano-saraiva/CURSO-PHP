<?php

class Pessoa{

    public $nome;

    public function falar(){
        return "o meu nome é ".$this->nome;
    }



   

}


$glaucio = new Pessoa();

$glaucio->nome = "Glaucio Daniel";

echo $glaucio->falar();