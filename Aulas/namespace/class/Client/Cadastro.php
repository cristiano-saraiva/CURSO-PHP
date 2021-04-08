<?php
namespace Client;
class Cadastro extends \Cadastro{

public function registrarVenda()
{
    echo "Foi registrada a venda para o cliente ".$this->getNome();
}

}