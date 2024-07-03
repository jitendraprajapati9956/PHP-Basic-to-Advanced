<?php

echo '<h1>PHP Date and Time</h1>';
echo "<br>";

echo '<h4>Print current date</h4>';
echo "<br>";
echo date("Y-m-d H:i:s") . "<br>";
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");

echo "<br>";

echo '<h4>Print yesterday</h4>';
echo "<br>";

echo date("Y-m-d H:i:s", time() - 60 * 60 * 24) . "<br>";


echo "<br>";

echo '<h4> Different format: </h4>';
echo "<br>";

echo date("F j Y, H:i:s") . "<br>";

echo "<br>";

echo '<h4>  Print current timestamp </h4>';
echo "<br>";

echo time() . "<br>";

echo "<br>";

echo '<h4>  Parse date: </h4>';
echo "<br>";

// Parse date: 
$dateString = "2020-02-06 12:45:35";
$parsedDate = date_parse($dateString);
echo "<pre>";
var_dump($parsedDate);
echo "</pre>";


echo "<br>";

echo '<h4> Parse date from format </h4>';
echo "<br>";

// Parse date from format: 
$dateString = "February 4 2020 12:45:35";

$parsedDate = date_parse_from_format("F j Y H:i:s", $dateString);
echo "<pre>";
var_dump($parsedDate);
echo "</pre>";


echo "The time is " . date("h:i:sa");


echo "<br>";

echo '<h4>Get Your Time Zone</h4>';
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");

echo "<br>";

echo '<h4>Create a Date With mktime()</h4>';
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);

echo "<br>";

echo '<h4>Create a Date From a String With strtotime()</h4>';
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);


$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
echo "<br>";

$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}
echo "<br>";
$d1=strtotime("July 04");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 4th of July.";












?>
