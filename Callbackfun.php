<?php


echo '<h1>Callback Functions</h1>';
echo "<br>";

echo '<h2>PHP array_map():</h2>';
echo "<br>";
function my_callback($item) {
    return strlen($item);
  }
  $strings = ["apple", "orange", "banana", "coconut"];
  $lengths = array_map("my_callback", $strings);
  print_r($lengths);

  echo "<br>";
  $strings = ["apple", "orange", "banana", "coconut"];
  $lengths = array_map( function($item) { return strlen($item); } , $strings);
  print_r($lengths);

  echo "<br>";

  echo '<h2>Callbacks in User Defined Functions</h2>';
  echo "<br>";

  function exclaim($str) {
    return $str . "! ";
  }
  
  function ask($str) {
    return $str . "? ";
  }
  
  function printFormatted($str, $format) {
    // Calling the $format callback function
    echo $format($str);
  }
  
  // Pass "exclaim" and "ask" as callback functions to printFormatted()
  printFormatted("Hello world", "exclaim");
  printFormatted("Hello world", "ask");


?>