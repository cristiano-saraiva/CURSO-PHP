<?php

/* SQL SERVER */

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "password");


$stmt = $conn->prepare("UPDATE tb_usuarios SET dessenha = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "jose_navarro";

$password = "qweasd";

$id = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados alterados";


// var_dump($results);


