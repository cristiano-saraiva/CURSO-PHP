<?php

/* SQL SERVER */

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "password");


$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "Anderson";

$password = "123456789";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido";


// var_dump($results);


