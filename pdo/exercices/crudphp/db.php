<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=testDB","root","Aoukane.19");
} catch (PDOException $e) {
    echo "Error : ". $e->getMessage();
    die();
}