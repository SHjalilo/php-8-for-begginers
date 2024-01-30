<?php

class Person{
    protected $firstName;
    protected $lastName;
    protected $age;

    public function __construct($firstName, $lastName, $age){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function getFirstName(){
        return $this->firstName;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function getAge(){
        return $this->age;
    }
    public function setFirstname($firstName){
        $this->firstName = $firstName;
    }
    public function setLastName($lastName){
        $this->lastName = $lastName;
    }
    public function setAge($age){
        $this->age = $age;
    }
}