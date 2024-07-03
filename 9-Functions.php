<?php

declare(strict_types=1); 




echo "<h1>PHP Functions</h1>";
echo "<br>";

echo "<br>";
echo "<h2>User Defined Functions</h2>";
echo "<br>";

function hello()
{
    echo 'Hello I am Jitendra<br>';
}


hello();
hello();
hello();

echo "<br>";
echo "<h2>PHP Function Arguments</h2>";
echo "<br>";


// Function with argument
function hello_name($name)
{
   echo "Hello I am $name" . '<br />';
}

hello_name('Jitendra Prajapati');

// Create sum of two functions
function sum($a, $b)
{
    return $a + $b;
}

echo sum(4,5) . '<br />';
echo sum(9,10) . '<br />';

// Create function to sum all numbers using ...$nums
 function sum2(...$nums)
{
   $sum = 0;
   foreach ($nums as $num) $sum += $num;
   return $sum;
}
echo sum2(1, 2, 3, 4, 6); 

// Arrow functions
 /*function sum3(...$nums)
{
return array_reduce($nums,fn($carry, $n) => carry +$n);
}
echo sum3(1, 2, 3, 4, 6); 

//Loosely Typed Language
function addNumbers(int $a, int $b) {
   return $a + $b;
 }
 echo addNumbers(5, "5 days");

 function addNumbers2(int $a, int $b) {
   return $a + $b;
 }
 echo addNumbers2(5, "5 days");
 // since strict is NOT enabled "5 days" is changed to int(5), and it will return 10

*/
//Return Type Declarations

 
function addNumbers3(float $a, float $b) : float {
  return $a + $b;
}
echo addNumbers3(1.2, 5.2);



echo "<br>";
echo "<h2>PHP Default Argument Value</h2>";
echo "<br>";

function setHeight($minheight = 50) {
   echo "The height is : $minheight <br>";
 }
 
 setHeight(350);
 setHeight();
 setHeight(135);
 setHeight(80);


 
echo "<br>";
echo "<h2>Passing Arguments by Reference</h2>";
echo "<br>";

function add_five(&$value) {
   $value += 5;
 }
 
 $num = 2;
 add_five($num);
 echo $num;

 echo "<br>";
echo "<h2>Variable Number of Arguments</h2>";
echo "<br>";

function sumMyNumbers(...$x) {
   $n = 0;
   $len = count($x);
   for($i = 0; $i < $len; $i++) {
     $n += $x[$i];
   }
   return $n;
 }
 
 $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
 echo $a;


 echo "<br>";
 echo "<h2>Return Type Declarations</h2>";
 echo "<br>";
 function addNumbers(float $a, float $b) : float {
   return $a + $b;
 }
 echo addNumbers(1.2, 5.2); 
 ?>

