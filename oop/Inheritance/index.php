<?php

require_once "../Inheritance/student.php";

$st = new Student('ahmed','bazid',27,13);
var_dump($st->getFirstName());
echo '<br>';
var_dump($st);