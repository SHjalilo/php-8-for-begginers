<?php

require_once "../Inheritance/student.php";
require_once "employees.php";
require_once "manager.php";

$st = new Student('ahmed','bazid',27,13);
var_dump($st->getFirstName());
echo '<br>';
var_dump($st);
echo '<br>';
//-----------------------//
$emp = new Employees('said','bokhari',22,8000,'devops');
var_dump($emp->getFirstName());
echo '<br>';
echo '<pre>';
print_r($emp);
echo '</pre>';
echo '<br>';

$man = new Manager('brahim','fasi',65, 13000,'tech');
print_r($man->getSalary());
echo '<br>';
// Polymorphism

print_r($emp->getPrime());
echo '<br>';
print_r($man->getPrime());
echo '<br>';
echo '---';
print_r($emp->totalSalary());
echo '<br>';
print_r($man->totalSalary());
echo '<br>';
