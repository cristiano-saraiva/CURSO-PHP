<?php
require_once("config.php");

use Client\Cadastro;

$cad = new Cadastro();

$cad->setNome("Cristiano Saraiva");
$cad->setEmail("cris@uu.com");
$cad->setSenha("120215");

$cad->registrarVenda();
