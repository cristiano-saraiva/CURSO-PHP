<?php

/* SQL SERVER */

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "password");


$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 1;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados Excuidos";


// var_dump($results);


