<?php

require_once "employees.php";

class Manager extends Employees{

    public function getPrime() { 
        $salary = $this->salary / 2;
        return round($salary,2); 
    }
}