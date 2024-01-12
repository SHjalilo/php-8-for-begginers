<?php

$mytext = "salamo alaykom everybody ! <br>";

// string like array in php 
echo $mytext[2]; // => l
echo "<br>";

// linitation in string

echo substr($mytext,15,4); // => ever
echo "<br>";

// replace 

echo str_replace("everybody","brothers",$mytext); 
echo "<br>";

// length

echo strlen($mytext);
echo "<br>";

// conitain or find element in string

$result = str_contains($mytext,"alaykom") ? "yes" : "no";
echo "the word exists ? => : $result";
echo "<br>";


// upper case

echo strtoupper($mytext);
echo "<br>";


// lower case

echo strtolower($mytext);
echo "<br>";

// count 

echo str_word_count($mytext);
echo "<br>";

// repeat str 

echo "<--------------------------------------------------------------->";
echo "<br>";
echo str_repeat($mytext,5);
echo "<--------------------------------------------------------------->";
echo "<br>";
?>
