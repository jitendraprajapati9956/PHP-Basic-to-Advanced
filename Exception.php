<?php

echo "<h1>Exceptions</h1>";
echo "<br>";

/*
echo "<h2>Throwing an Exception</h2>";



function divide($dividend, $divisor) {
    if($divisor == 0) {
      throw new Exception("Division by zero");
    }
    return $dividend / $divisor;
  }
  
  echo divide(5, 0);
*/

echo "<h2>try...catch Statement</h2>";

function divide($dividend, $divisor) {
    if($divisor == 0) {
      throw new Exception("Division by zero");
    }
    return $dividend / $divisor;
  }
  
  try {
    echo divide(5, 0);
  } catch(Exception $e) {
    echo "divide by zero.";
  }

  echo "<br>";

  echo "<h2>try...catch...finally Statement</h2>";
  function divide2($dividend, $divisor) {
    if($divisor == 0) {
      throw new Exception("Division by zero");
    }
    return $dividend / $divisor;
  }
  
  try {
    echo divide2(5, 0);
  } catch(Exception $e) {
    echo "divide by zero. <br>";
  } finally {
    echo "Finally execute.";
  }

  echo "<br>";

  echo "<h2>try...finally Statement</h2>";
  function divide3($dividend, $divisor) {
    if($divisor == 0) {
      throw new Exception("Division by zero");
    }
    return $dividend / $divisor;
  }
  
  try {
    echo divide3(5, 0);
  } finally {
    echo 'Finally execute.';
  }



  echo "<br>";

  echo "<h2>Exception Object</h2>";
  function divide4($dividend, $divisor) {
    if($divisor == 0) {
      throw new Exception("Division by zero", 1);
    }
    return $dividend / $divisor;
  }
  
  try {
    echo divide4(5, 0);
  } catch(Exception $ex) {
    $code = $ex->getCode();
    $message = $ex->getMessage();
    $file = $ex->getFile();
    $line = $ex->getLine();
    echo "Exception thrown in $file on line $line: [Code $code]
    $message";
  }

  ?>