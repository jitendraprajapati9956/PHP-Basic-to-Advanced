<?php
namespace myArea;

function myValue2(){
  return __NAMESPACE__;
}

echo "<h2>Create a PHP Constant:define()</h2>";
echo "<br>";


define("GREETING", "Welcome to PHP");
echo GREETING;

echo "<h2>Create a constant with a case-insensitive name:</h2>";
echo "<br>";

define("GREETTING", "Welcome to PHP", true);
echo GREETTING;
echo "<br>";

echo "<h2>PHP const Keyword</h2>";
echo "<br>";

const MYCAR = "Volvo";
echo MYCAR;
echo "<br>";

echo "<h2>PHP Constant Arrays</h2>";
echo "<br>";

define("cars", [
    "Rolls Royce",
    "BMW",
    "Toyota"
  ]);
  echo cars[0];

  echo "<br>";

  echo "<h2>Constants are Global</h2>";
  echo "<br>";

  define("GREEETTING", "Welcome to PHP");

  function myTest() {
    echo GREEETTING;
  }
  
  myTest();

?>