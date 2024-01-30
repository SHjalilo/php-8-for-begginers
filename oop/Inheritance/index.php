<?php

require_once "../Inheritance/student.php";
require_once "employees.php";
require_once "manager.php";

$st = new Student('ahmed','bazid',27,13);
var_dump($st->getFirstName());
echo '<br>';
var_dump($st);
//-----------------------//
$emp = new Employees('said','bokhari',22,13000,'devops');
//var_dump($emp->getFirstName());
echo '<pre>';
print_r($emp);
echo '</pre>';

$man = new Manager('brahim','fasi',65,8000,'tech');
print_r($man->getSalary());
