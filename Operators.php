<?php
$x = 10;  
$y = 6;

echo $x + $y;
echo '<br>';
echo $x - $y;
echo '<br>';
echo $x * $y;
echo '<br>';
echo $x / $y;
echo '<br>';
echo $x % $y;
echo '<br>';
echo $x ** $y;
echo '<br>';


echo $x = $y;
echo '<br>';
echo $x = $x+$y;
echo '<br>';
echo $x = $x-$y;
echo '<br>';
echo $x = $x*$y;
echo '<br>';
echo $x = $x/$y;
echo '<br>';
echo $x = $x%$y;
echo '<br>';



echo $x == $y;
echo '<br>';
echo $x === $y;
echo '<br>';
echo $x != $y;
echo '<br>';
echo $x <> $y;
echo '<br>';
echo $x !== $y;
echo '<br>';
echo $x > $y;
echo '<br>';
echo $x < $y;
echo '<br>';
echo $x >= $y;
echo '<br>';
echo $x >= $y;
echo '<br>';
echo $x <=> $y;
echo '<br>';


echo ++$x;
echo '<br>';
echo $x++;
echo '<br>';
echo --$x;
echo '<br>';
echo $x--;
echo '<br>';


$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!";
}
echo '<br>';


$x = 100;  
$y = 50;

if ($x == 100 or $y == 80) {
    echo "Hello world!";
}

echo '<br>';

$x = 100;  
$y = 50;

if ($x == 100 xor $y == 80) {
    echo "Hello world!";
}

echo '<br>';

$x = 100;  
$y = 50;

if ($x == 100 && $y == 50) {
    echo "Hello world!";
}
echo '<br>';

$x = 100;  
$y = 50;

if ($x == 100 || $y == 80) {
    echo "Hello world!";
}
echo '<br>';


$x = 100;  

if (!($x == 90)) {
    echo "Hello world!";
}
echo '<br>';



$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;
echo '<br>';

$txt1 = "Hello";
$txt2 = " world!";
$txt1 .= $txt2;
echo $txt1;
echo '<br>';

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

print_r($x + $y); // union of $x and $y
echo '<br>';

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x == $y);
echo '<br>';

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x === $y);
echo '<br>';

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x != $y);
echo '<br>';


$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x <> $y);
echo '<br>';


$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x !== $y);
echo '<br>';


   // if empty($user) = TRUE, set $status = "anonymous"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo("<br>");

   $user = "John Doe";
   // if empty($user) = FALSE, set $status = "logged in"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo '<br>';

   // variable $user is the value of $_GET['user']
   // and 'anonymous' if it does not exist
   echo $user = $_GET["user"] ?? "anonymous";
   echo("<br>");
  
   // variable $color is "red" if $color does not exist or is null
   echo $color = $color ?? "red";
   echo '<br>';

















?>