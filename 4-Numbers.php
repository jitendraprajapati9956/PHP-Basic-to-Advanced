<?php

echo "<h1>Declaring Numbers</h1>";
echo "<br>";

// Declaring numbers

$a = 5;
echo "$a <br>". var_dump($a);
$b = 4;
echo "$b <br>" .var_dump($b);
$c = 1.2;
echo "$c <br>" .var_dump($c);
$d = "5";
echo "$d <br>" .var_dump($d);
echo "<br>";

echo "<h1>PHP Integers</h1>";
echo "<br>";

echo "INT MAX:" . PHP_INT_MAX;
echo "<br>";
echo "INT MIN:" . PHP_INT_MIN;
echo "<br>";
echo "INT SIZE:" . PHP_INT_SIZE;
echo "<br>";
var_dump(is_int($a));
echo "<br>";

echo "<h1>PHP Floats</h1>";
echo "<br>";

echo "PHP_FLOAT_MAX:" . PHP_FLOAT_MAX;
echo "<br>";
echo "PHP_FLOAT_MIN:" . PHP_FLOAT_MIN;
echo "<br>";
echo "PHP_FLOAT_DIG:" . PHP_FLOAT_DIG;
echo "<br>";
echo "PHP_FLOAT_EPSILON:" . PHP_FLOAT_EPSILON;
echo "<br>";
var_dump(is_int($c));
echo "<br>";

echo "<h1>PHP Infinity</h1>";
echo "<br>";

$x = 1.9e411;
var_dump($x);

echo "<br>";

echo "<h1>PHP NaN</h1>";
echo "<br>";
$x = acos(8);
var_dump($x);
echo "<br>";

echo "<h1>PHP Numerical Strings</h1>";
echo "<br>";
$x = 5985;
echo "$x=";
var_dump(is_numeric($x));
echo "<br>";
$x = "5985";
echo "$x=";
var_dump(is_numeric($x));
echo "<br>";
echo "$x=";
$x = "59.85" + 100;
var_dump(is_numeric($x));
echo "<br>";
$x = "Hello=";
echo "$x:";
var_dump(is_numeric($x));
echo "<br>";


echo "<h1>PHP Casting Strings and Floats to Integers</h1>";
echo "<br>";

$x = 23465.768;
echo "x:" . $x;
echo "<br>";
$int_cast = (int)$x;
echo "Casting Float to Int:" .$int_cast;
echo "<br>";

// Cast string to int
$x = "23465.768";
echo "string:" . $x;
echo "<br>";
$int_cast = (int)$x;
echo "Cast string to int:" .$int_cast;
echo "<br>";

echo "<h1>PHP Casting</h1>";
echo "<br>";
echo "<h2>Cast to String</h2>";
echo "<br>";
//Casting
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);
echo "<br>";
var_dump($e);
echo "<br>";

echo "<h2>Cast to Integer</h2>";
echo "<br>";


$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$f = (int) $f;
$g = (int) $g;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);
echo "<br>";
var_dump($e);
echo "<br>";
var_dump($f);
echo "<br>";
var_dump($g);
echo "<br>";

echo "<h2>Cast to Float</h2>";
echo "<br>";


$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (float) $a;
$b = (float) $b;
$c = (float) $c;
$d = (float) $d;
$e = (float) $e;
$f = (float) $f;
$g = (float) $g;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);
echo "<br>";
var_dump($e);
echo "<br>";
var_dump($f);
echo "<br>";
var_dump($g);
echo "<br>";


echo "<h2>Cast to Boolean</h2>";
echo "<br>";

$a = 5;       // Integer
$b = 5.34;    // Float
$c = 0;       // Integer
$d = -1;      // Integer
$e = 0.1;     // Float
$f = "hello"; // String
$g = "";      // String
$h = true;    // Boolean
$i = NULL;    // NULL

$a = (bool) $a;
$b = (bool) $b;
$c = (bool) $c;
$d = (bool) $d;
$e = (bool) $e;
$f = (bool) $f;
$g = (bool) $g;
$h = (bool) $h;
$i = (bool) $i;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);
echo "<br>";
var_dump($e);
echo "<br>";
var_dump($f);
echo "<br>";
var_dump($g);
echo "<br>";
var_dump($h);
echo "<br>";
var_dump($i);
echo "<br>";


echo "<h2>Cast to Array</h2>";
echo "<br>";

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (array) $a;
$b = (array) $b;
$c = (array) $c;
$d = (array) $d;
$e = (array) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);
echo "<br>";
var_dump($e);
echo "<br>";



echo "<h2>Number checking functions</h2>";
echo "<br>";
// Number checking functions
is_float(1.25); // true
is_double(1.25); // true
is_int(15); // true
is_numeric('3.45'); // true
is_numeric('3g.45'); // false
echo "<br>";



$a = 5;
$b = 5.34;
$c = "25";
var_dump($a);
var_dump($b);
var_dump($c);
echo "<br>";

$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));

echo "<br>";

$x = 10.365;
var_dump(is_float($x));
echo "<br>";

$x = 1.9e411;
var_dump($x);
echo "<br>";

$x = acos(8);
var_dump($x);
echo "<br>";

$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));
$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));
echo "<br>";


// Conversion
$str_number = 12.34;
$number = intval($str_number);
// $number = (float)$str_number; // ? Use floatval(), (int), intval()
echo var_dump($number) . '<br />';
echo "<br>";
// Number functions
echo "abs(-15) " . abs(-15) . '<br>';
echo "pow(2,  3) " . pow(2, 3) . '<br>';
echo "sqrt(16) " . sqrt(16) . '<br>';
echo "max(2, 3) " . max(2, 3) . '<br>';
echo "min(2, 3) " . min(2, 3) . '<br>';
echo "round(2.4) " . round(2.4) . '<br>';
echo "round(2.6) " . round(2.6) . '<br>';
echo "floor(2.6) " . floor(2.6) . '<br>';
echo "ceil(2.4) " . ceil(2.4) . '<br>';
echo "<br>";
// Formatting numbers
$number = 123456789.12345;
echo number_format($number, 2, '.', ',') . '<br>';


