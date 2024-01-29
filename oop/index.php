<?php

require_once "./circle.php";
require_once "./calcul.php";

//$circel1 = new Circle(12,3.14);
$circel1 = new Circle(12);
$circel2 = new Circle(4);
//echo $circel1->getRadius();
echo $circel1->area() . "<br>";
echo $circel2->area() . '<br>';

echo "<br>";

$cal = new Calcul();

echo $cal::addition(4,5) ."<br>";
echo Calcul::addition(5,6) ."<br>";