<?php
  // What is a variable - Variable is container to store value
  // Variable types - String, Integer, Float/Double, Boolean, Null, Array, Object, Resource
  // Declaration variables -

  echo "<h1>Declaration variables</h1>";
  echo "<br>";

  $name = 'Jitendra Prajapati'; 
  $age = 22; 
  $height = 1.85; 
  $isMale = true;
  $salary = null;

  // Print the variable. Explain what is -
  echo '<b>String:</b>'.$name.'  <b>datatype:</b>'.gettype($name).'<br />';
  echo '<b>int:</b>'.$age.' <b>datatype:</b>'.gettype($age).'<br />';
  echo '<b>float:</b>'.$height.' <b>datatype:</b>'.gettype($height).'<br />';
  echo '<b>boolean:</b>'.$isMale.' <b>datatype:</b>'.gettype($isMale).'<br />';
  echo '<b>Null:</b>'.$salary.' <b>datatype:</b>'.gettype($salary).'<br />';
  echo '<br>';
  // Print types of the variable -

  // Print the whole variable
  var_dump($name, $age, $height, $isMale, $salary);

  // Change the value of variable
  $name = false;

  // Variable checking function -
  is_string($name); // false
  is_int($age); // true
  is_double($height); // true
  is_bool($isMale); // true

  // Check if variable is defined
  isset($name); // true
  isset($address); // false

  // Constants
  define('PI', 3.1416);
  echo '<br />';
  echo '<b>PI:</b>'.PI.'<br />';

  // Using PHP built-in constant
  echo "<b>Sort_Asc:</b>".SORT_ASC.'<br />';
  echo "<b>PHP_INT_MAX:</b>".PHP_INT_MAX.'<br />';

  echo "<h1>Variables Scope</h1>";

$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";

function myTest2() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
}
myTest2();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";


echo "<h1>Global Keyword</h1>";

$x = 5;
$y = 10;

function myTest3() {
  global $x, $y;
  $y = $x + $y;
}

myTest3();

echo "Global Variable:".$y; // outputs 15
echo "<br>";

echo "Global Variable in Function:";
$x = 5;
$y = 10;

function myTest4() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest4();

echo $y; // outputs 15


echo "<h1>Static Keyword</h1>";

function myTest5() {
  static $x = 0;
  echo $x;
  $x++;
}
echo "Static Keyword:";

myTest5();
echo "<br>";
echo "Static Keyword:";
myTest5();
echo "<br>";
echo "Static Keyword:";
myTest5();

?>

















