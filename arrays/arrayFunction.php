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



echo "<----------------------------------------------------------->";
echo "<br>";
echo "sum element in array";
echo "<br>";
echo "<----------------------------------------------------------->";
echo "<br>";
$total_prices = [21,44,6,87,56];
/*echo $total_prices[0] + $total_prices[1] + $total_prices[2] + $total_prices[3] + $total_prices[4] ;*/

echo array_sum($total_prices);
echo "<pre>";
print_r($total_prices);

echo "<----------------------------------------------------------->";
echo "<br>";
echo "random element in array";
echo "<br>";
echo "<----------------------------------------------------------->";

echo "<br>";

$students = [
    "ali",
    "salah",
    "hamza",
    "med",
    "ahmed",
];

$index = rand(0,count($students)-1);
echo $students[$index];
echo "<br>";

$index = rand(0,count($students)-1);
echo $students[$index];
echo "<br>";


?>
