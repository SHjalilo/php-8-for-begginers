<?php
/*
//$host = '127.0.0.1';
$host = 'localhost';
$user = "root";
$password = "Aouknae.19";
//$password = "";
$db_name = "test";
$port = 3306;
$charset = 'utf8';
*/
try{
    $cnn = new PDO("mysql:host=localhost;dbname=test" ,'root','Aoukane.19');
    echo "connect !";

}catch(PDOException $e){
    echo "error : " .$e;
}

