<?php

/* MYSQL */

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "password");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row ) {
    foreach ($row as $key => $value) {
       echo  "<strong>".$key.": </strong>".$value."<br>";
    }

    echo "<hr>";
}

// var_dump($results);


