<?php

$cars = ["bmw","fiat","lada",44,true];
echo "<pre>";
print_r($cars);
echo "<br>";

// count => return the value //
echo "<----------------------------------------------------------->";
echo "<br>";
echo count($cars);
echo "<br>";
echo "<----------------------------------------------------------->";

// add element at the beginning of array //

array_unshift($cars,"benz","gmc");
array_unshift($cars,"toyota");
echo "<pre>";
print_r($cars);

echo "<br>";
// add element at the end of array //

// method 1
$cars[] = "honda";

//method 2
array_push($cars,"volvo");
echo "<pre>";
print_r($cars);

// replace element in array //

$cars[7] = "nissan"; // in origin array is index 4
echo "<pre>";
print_r($cars);

// remove element from array //

unset($cars[6]); // 
echo "<pre>";
print_r($cars);

?>
