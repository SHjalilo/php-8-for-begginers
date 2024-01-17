<?php

//
echo date('d/m/y');

// write the name of day and month

echo "<br>";
echo date('D/M/Y');


// write the full name of day 

echo "<br>";
echo date('l D/M/Y');


// write the hours

echo "<br>";
echo date('D/M/Y h:i:s');


// write the hours (pm/am)

echo "<br>";
echo date('D/M/Y h:i:s a');

// the diff between to days
echo "<br>";

$date1 = date_create('2024-01-01');
$date2 = date_create('2024-01-17');

$diff = date_diff($date1,$date2);

echo $diff->format('%a days %d | month %m | years %y');

?>
