<?php

$con = new mysqli("localhost", "root", "password", "dbphp7");/* Dandos para conexão com banco  */

if ($con->connect_error) {

    echo "Error: ".$con->connect_error;

}

$stmt = $con->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

$login = "user";
$pass = "12345";

$stmt->bind_param("ss", $login, $pass);

$stmt->execute();

$login = "root";
$pass = "!@#$$%";

$stmt->execute();

