<?php

/* -----Metodos Magicos----- */

class Endereco{

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($logradouro, $numero, $cidade)
    {
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->cidade = $cidade;

    }
    
    /* Geters */
public function getLogradouro(){
    return $this->logradouro;
}
public function getNumero(){
    return $this->numero;
}
public function getCidade(){
    return $this->cidade;
}


    /* Seters */
public function setLogradouro($logradouro){

    $this->logradouro = $logradouro;
}
public function setNumero($numero){

    $this->numero = $numero;
}
public function setCidade($cidade){

    $this->cidade = $cidade;
}

public function __destruct()
{
    // var_dump("Destruir");
}

public function __toString()
{
    return $this->logradouro.", Nº".$this->numero.", ".$this->cidade;
}


}

$meuEndereco = new Endereco("Rua: Arne Ragnar Enge", "123", "São Paulo");


// var_dump($meuEndereco);

// unset($meuEndereco);

echo $meuEndereco;


