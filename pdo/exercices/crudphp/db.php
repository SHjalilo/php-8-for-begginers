<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=testDB","root","");
} catch (PDOException $e) {
    echo "Error : ". $e->getMessage();
    die();
}
