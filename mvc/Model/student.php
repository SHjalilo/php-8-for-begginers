<?php

//$pdo = new PDO('mysql:host=localhost;dbname=testDB', 'root', '');
//$std = $pdo->query("SELECT * FROM Student")->fetchAll(PDO::FETCH_OBJ);


function dbConnecte(){
    return new PDO('mysql:host=localhost;dbname=testDB', 'root', '');
}

function studentList(){
    $pdo = dbConnecte();
    return $pdo->query("SELECT * FROM Student")->fetchAll(PDO::FETCH_OBJ);
}

function create(){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $age = $_POST["age"];
    $login = $_POST["login"];
    $pdo = dbConnecte();
    $std =  $pdo->prepare("INSERT INTO Student VALUES (null,?,?,?,?)");
    return $std->execute([$firstname,$lastname,$age,$login]);
}

function edit($id,$firstname,$lastname,$age,$login){
    $pdo = dbConnecte();
    $std = $pdo->prepare("UPDATE Student SET firstname=? ,lastname=? ,age=? ,login=? WHERE id=? ");
    return $std->execute([$firstname,$lastname,$age,$login,$id]);
}
function view($id){
    $pdo = dbConnecte();
    $std = $pdo->prepare("SELECT * FROM Student WHERE id=?");
    $std->execute([$id]);
    return $std->fetch(PDO::FETCH_OBJ);
}
function destroy($id){
    //$id = $_GET["id"];
    $pdo = dbConnecte();
    $std = $pdo->prepare("DELETE FROM Student WHERE id=?");
    return $std->execute([$id]);

}
