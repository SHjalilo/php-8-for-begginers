<?php

require_once "Model/student.php";
function studentListAction(){
    
    $std = studentList();

    require_once "View/studentList.php";

}

function createAction(){

    require_once "View/createStudent.php";
}
function storeAction() {
    try {
        $isCreated = create();
        //var_dump($isCreated );
        header("location:index.php");
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
function editAction(){
    $id = $_GET["id"];
    $std = view($id);
    require_once 'View/editStudent.php';
}
function updateAction(){
    //var_dump($_POST);
    //extract($_POST);
    $id = $_POST['id'];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $age = $_POST["age"];
    $login = $_POST["login"];
    edit($id,$firstname,$lastname,$age,$login);
    header("location:index.php");
}
function deleteAction(){
    $id = $_GET["id"];
    require_once 'View/deleteStudent.php';
}
function destroyAction(){
    $id = $_GET["id"];
    destroy($id);
    header("location:index.php");
}