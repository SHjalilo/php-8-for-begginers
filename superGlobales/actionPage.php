<?php

//
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['gender'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['gender'])){
        echo "Hi Mr : " . $_POST['name'] . " <br>";
        echo 'you gender is : ' . $_POST['gender'] ;
    }
    else
        echo "empty elements ";
} else {
    echo "do not exists ! ";
}
?>

