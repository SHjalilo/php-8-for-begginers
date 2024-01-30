<?php

require_once 'person.php';

class Employees extends Person{

    protected $salary;
    protected $post;


    public function __construct($firstName,$lastName,$age,$salary,$post){
        parent::__construct($firstName,$lastName,$age);
        $this->salary = $salary;
        $this->post = $post;
    }

    public function getSalary(){
        return $this->salary;
    }
    public function getPost(){
        return $this->post;
    }

    public function setSalary($salary){
        $this->salary = $salary;
    }
    public function setPost($post){
        $this->post = $post;
    }
}