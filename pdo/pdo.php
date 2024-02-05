<?php
/*
//$host = '127.0.0.1';
$host = 'localhost';
$user = "root";
$password = "";
//$password = "";
$db_name = "test";
$port = 3306;
$charset = 'utf8';
*/
try{
    $cnn = new PDO("mysql:host=localhost;dbname=test" ,'root','');
    echo "connect !";

}catch(PDOException $e){
    echo "error : " .$e;
}

