<?php

require_once "../Inheritance/person.php";
class Student extends Person{
    private $note ;

    public function __construct($firstName, $lastName, $age,$note){
        parent::__construct($firstName, $lastName, $age);
        $this->note = $note;
    }
}

