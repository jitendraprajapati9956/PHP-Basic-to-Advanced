<?php

echo "<h1>PHP Operators</h1>";
echo "<br>";

$x = 10;  
$y = 6;
echo "x:".$x;
echo "<br>";
echo "y:".$y;
echo "<br>";


echo "<h2>Arithmetic Operators</h2>";
echo "<br>";

echo "x+y :";
echo $x + $y;
echo '<br>';
echo "x-y :";
echo $x - $y;
echo '<br>';
echo "x*y :";
echo $x * $y;
echo '<br>';
echo "x/y :";
echo $x / $y;
echo '<br>';
echo "x%y :";
echo $x % $y;
echo '<br>';
echo "x**y :";
echo $x ** $y;
echo '<br>';


echo "<h2>Assignment Operators</h2>";
echo "<br>";

echo "x=y :";
echo $x = $y;
echo '<br>';
echo "x+=y :";
echo $x = $x+$y;
echo '<br>';
echo "x-=y :";
echo $x = $x-$y;
echo '<br>';
echo "x*=y :";
echo $x = $x*$y;
echo '<br>';
echo "x/=y :";
echo $x = $x/$y;
echo '<br>';
echo "x%=y :";
echo $x = $x%$y;
echo '<br>';


echo "<h2>Comparison Operators</h2>";
echo "<br>";

echo "x==y :";
echo $x == $y;
echo '<br>';
echo "x===y :";
echo $x === $y;
echo '<br>';
echo "x!=y :";
echo $x != $y;
echo '<br>';
echo "x<>y :";
echo $x <> $y;
echo '<br>';
echo "x!==y :";
echo $x !== $y;
echo '<br>';
echo "x>y :";
echo $x > $y;
echo '<br>';
echo "x<y :";
echo $x < $y;
echo '<br>';
echo "x>=y :";
echo $x >= $y;
echo '<br>';
echo "x>=y :";
echo $x >= $y;
echo '<br>';
echo "x<=>y :";
echo $x <=> $y;
echo '<br>';


echo "<h2>Increment / Decrement Operators</h2>";
echo "<br>";

echo "++x :";
echo ++$x;
echo '<br>';
echo "x++ :";
echo $x++;
echo '<br>';
echo "--x :";
echo --$x;
echo '<br>';
echo "x-- :";
echo $x--;
echo '<br>';


echo "<h2>Logical Operators</h2>";
echo "<br>";
echo "x == 100 and y == 50";
echo "<br>";
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "And";
}
echo '<br>';

echo "x == 100 or y == 50";
echo "<br>";

if ($x == 100 or $y == 80) {
    echo "or";
}

echo '<br>';

echo "x == 100 xor y == 50";
echo "<br>";

if ($x == 100 xor $y == 80) {
    echo "xor";
}

echo '<br>';
echo "x == 100 && y == 50";
echo "<br>";



if ($x == 100 && $y == 50) {
    echo "&&";
}
echo '<br>';

echo "x == 100 || y == 50";
echo "<br>";

if ($x == 100 || $y == 80) {
    echo "||";
}
echo '<br>';

echo "!x == 90";
echo "<br>";


if (!($x == 90)) {
    echo "!";
}
echo '<br>';

echo "<h2>String Operators</h2>";
echo "<br>";

$txt1 = "Hello";
$txt2 = " world!";
echo "txt1:".$txt1;
echo '<br>';
echo "txt2:".$txt2;
echo '<br>';
echo "txt1 + txt2:".$txt1 . $txt2;
echo '<br>';
echo '<br>';


echo "txt1:".$txt1;
echo '<br>';
echo "txt2:".$txt2;
echo '<br>';
$txt1 .= $txt2;
echo "txt1 .=txt2:".$txt1;
echo '<br>';

echo "<h2>Array Operators</h2>";
echo "<br>";

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

echo "union(+):";
echo '<br>';
print_r($x + $y); // union of $x and $y
echo '<br>';

echo "Equality(==):";
echo '<br>';
var_dump($x == $y);
echo '<br>';

echo "Identity(===):";
echo '<br>';
var_dump($x === $y);
echo '<br>';

echo "Inequality(!=):";
echo '<br>';
var_dump($x != $y);
echo '<br>';


echo "Inequality(<>):";
echo '<br>';
var_dump($x <> $y);
echo '<br>';


echo "Non-identity(!==):";
echo '<br>';
var_dump($x !== $y);
echo '<br>';


echo "<h2>Conditional Assignment Operators</h2>";
echo "<br>";

    echo "Ternary(?:):";
    echo '<br>';
    echo '<br>';
   // if empty($user) = TRUE, set $status = "anonymous"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo("<br>");

   $user = "Jitendra Prajapati";
   // if empty($user) = FALSE, set $status = "logged in"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo '<br>';
   echo '<br>';

   echo "Null coalescing(??):";
   echo '<br>';
   // variable $user is the value of $_GET['user']
   // and 'anonymous' if it does not exist
   echo $user = $_GET["user"] ?? "anonymous";
   echo("<br>");
  
   // variable $color is "red" if $color does not exist or is null
   echo $color = $color ?? "red";
   echo '<br>';

















?>