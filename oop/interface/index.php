<?php

require_once 'circle.php';
require_once 'rectangle.php';

$c1 = new Circle(5);
var_dump($c1->area());
echo '<br>';
$rec1 = new Rectangle(4,3);
var_dump($rec1->area());
echo '<br>';