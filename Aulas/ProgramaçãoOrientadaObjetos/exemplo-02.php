<?php

class Carro{

    private $modelo;
    private $motor;
    private $ano;

    

    /* Seters */
public function setModelo($modelo){
    $this->modelo = $modelo;
}
public function setMotor($motor){
    $this->motor = $motor;
}
public function setAno($ano){
    $this->ano = $ano;
}

    /* Geters */
public function getModelo(){
    return $this->modelo;
}
public function getMotor():float{
    return $this->motor;
}
public function getAno():int{
    return $this->ano;
}

public function exibir(){

    return array(
        "modelo" => $this->getModelo(),
        "motor" => $this->getMotor(),
        "ano" => $this->getAno()
    );
}

}


$gol = new Carro();

$gol->setModelo("Gol GT");
$gol->setMotor("1.8");
$gol->setAno("2001");

var_dump($gol->exibir()) ;

echo "<br>";

echo $gol->getModelo();

