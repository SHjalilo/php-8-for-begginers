<?php
/*======================================*/
//boolean => {true / false}

$sun = true ; /* ==> return 1 */
$salary = false ; /* ==> return empty */

echo gettype($salary); //bool
echo "<br/>";
/*======================================*/
// integer

$age = 27;

echo gettype($age); //int
echo "<br/>";
/*======================================*/
// float

$price = 134.5;

echo gettype($price); //double
echo "<br/>";
/*======================================*/
// string

$name = "ahmed";

echo gettype($name); //string
echo "<br/>";
/*======================================*/
// null 

$x = null ;

echo gettype($x); //null
echo "<br/>";
/*======================================*/
// array

$arr = ["hero","van","green"];

echo gettype($srr); // array
echo "<br/>";
/*======================================*/
// object

class User{

}

$user1 = new User();

echo gettype($user1); // object
echo "<br/>";
/*======================================*/
//resource

$file = fopen("myfile.txt","r");

echo gettype($file); //resource

?>
