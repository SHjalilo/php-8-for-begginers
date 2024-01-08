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
echo "<br>";
echo "<----------------------------------------------------------->";
echo "<br>";
echo "add element";
echo "<br>";
echo "<----------------------------------------------------------->";
array_unshift($cars,"benz","gmc");
array_unshift($cars,"toyota");
echo "<pre>";
print_r($cars);

echo "<br>";
// add element at the end of array //
echo "<----------------------------------------------------------->";
echo "<br>";
echo "add element to the end";
echo "<br>";
echo "<----------------------------------------------------------->";
// method 1
$cars[] = "honda";

//method 2
array_push($cars,"volvo");
echo "<pre>";
print_r($cars);

// replace element in array //
echo "<----------------------------------------------------------->";
echo "<br>";
echo "replace element ";
echo "<br>";
echo "<----------------------------------------------------------->";
$cars[7] = "nissan"; // in origin array is index 4
echo "<pre>";
print_r($cars);

// remove element from array //
echo "<----------------------------------------------------------->";
echo "<br>";
echo "remove element ";
echo "<br>";
echo "<----------------------------------------------------------->";
unset($cars[6]); // 
echo "<pre>";
print_r($cars);

// remove the last element in array //
echo "<----------------------------------------------------------->";
echo "<br>";
echo "remove the last element ";
echo "<br>";
echo "<----------------------------------------------------------->";
array_pop($cars); 
echo "<pre>";
print_r($cars);

 // 2 method

unset($cars[count($cars)-1]); 
echo "<pre>";
print_r($cars);


echo "<----------------------------------------------------------->";
echo "<br>";
echo "reverse element in array";
echo "<br>";
echo "<----------------------------------------------------------->";

// reverse array //

$reversed_array = array_reverse($cars);
echo "<pre>";
print_r($reversed_array);

?>
