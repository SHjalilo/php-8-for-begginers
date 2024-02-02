<h1> Database Connection | Mysqli . </h1>

<?php
$host = "127.0.0.1";
$user = "root";
$password = "password";
$db_name = "testDB";

$con = mysqli_connect($host, $user, $password, $db_name);

if(!$con){
    die("Connection Failed : ".mysqli_connect_error());
}else{
    echo "Connection Succeeded ";
}



?>
