<?php

$con = new mysqli("localhost", "root", "password", "dbphp7");/* Dandos para conexão com banco  */

if ($con->connect_error) {

    echo "Error: ".$con->connect_error;

}

$result = $con->query("SELECT * FROM tb_usuarios;");

$data = array();

while ($row = $result->fetch_assoc()) {

    array_push($data, $row);
}

echo json_encode($data);