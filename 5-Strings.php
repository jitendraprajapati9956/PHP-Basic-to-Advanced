<?php
// Create simple string
$string = "Hello, I am Jitendra Prajapati"; // Extract SamiurRahmanMukul into variable
$string2 = 'Hello, I am Jitendra Prajapati'; // Replace SamiurRahmanMukul with variable
echo $string . '<br>';
echo $string2 . '<br>';

// String concatenation
echo "Hello " . " World"; // Multiple concatenation . " and PHP";

// String functions
$string = "    Hello World    ";

echo "1 - " . strlen($string) . '<br>' . PHP_EOL;
echo "2 - " . trim($string) . '<br>' . PHP_EOL;
echo "3 - " . ltrim($string) . '<br>' . PHP_EOL;
echo "4 - " . rtrim($string) . '<br>' . PHP_EOL;
echo "5 - " . str_word_count($string) . '<br>' . PHP_EOL;
echo "6 - " . strrev($string) . '<br>' . PHP_EOL;
echo "7 - " . strtoupper($string) . '<br>' . PHP_EOL;
echo "8 - " . strtolower($string) . '<br>' . PHP_EOL;
echo "9 - " . ucfirst('hello') . '<br>' . PHP_EOL;
echo "10 - " . lcfirst('HELLO') . '<br>' . PHP_EOL;
echo "11 - " . ucwords('hello world') . '<br>' . PHP_EOL;
echo "12 - " . strpos($string, 'world') . '<br>' . PHP_EOL; // Change into world
echo "13 - " . stripos($string, 'world') . '<br>' . PHP_EOL;
echo "14 - " . substr($string, 8) . '<br>' . PHP_EOL;
echo "15 - " . str_replace('World', 'PHP', $string) . '<br>' . PHP_EOL;
echo "16 - " . str_ireplace('world', 'PHP', $string) . '<br>' . PHP_EOL;

$invoiceNumber = 100;
$invoiceNumber2 = 123456;
echo str_pad($invoiceNumber, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
echo str_pad($invoiceNumber2, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
echo str_repeat('Hello', 2) . '<br>' . PHP_EOL;

// Multiline text and line breaks
$longText = "
  Hello, my name is Jitendra Prajapati
  I am 22,
  I love coding
";

echo $longText . '<br>' . PHP_EOL;
echo nl2br($longText) . '<br>' . PHP_EOL;

// Multiline text and reserve html tags
$longText = "
  Hello, my name is <b>Jitendra Prajapati</b>
  I am <b>22</b>,
  I love coding
";

echo "1 - " . $longText . '<br>';
echo "2 - " . nl2br($longText) . '<br>';
echo "3 - " . htmlentities($longText) . '<br>' . PHP_EOL;
echo "4 - " . nl2br(htmlentities($longText)) . '<br>' . PHP_EOL;
echo "5 - " . html_entity_decode(htmlentities($longText)) . '<br>' . PHP_EOL;
echo "6 - " . htmlspecialchars($longText) . '<br>' . PHP_EOL;

$x = "John";
echo 'Hello $x';
echo "<br>";


echo strlen("Hello world!");
echo "<br>";
echo str_word_count("Hello world!");
echo "<br>";
echo strpos("Hello world!", "world");
echo "<br>";

$x = "Hello World!";
echo strtoupper($x);
echo "<br>";

$x = "Hello World!";
echo strtolower($x);
echo "<br>";


$x = "Hello World!";
echo str_replace("World", "Dolly", $x);
echo "<br>";

$x = "Hello World!";
echo strrev($x);
echo "<br>";

$x = " Hello World! ";
echo trim($x);
echo "<br>";
$x = "Hello World!";
$y = explode(" ", $x);

//Use the print_r() function to display the result:
print_r($y);

/*
Result:
Array ( [0] => Hello [1] => World! )
*/
echo "<br>";

$x = "Hello";
$y = "World";
$z = $x . $y;
echo $z;

echo "<br>";

$x = "Hello";
$y = "World";
$z = $x . " " . $y;
echo $z;
echo "<br>";

$x = "Hello";
$y = "World";
$z = "$x $y";
echo $z;
echo "<br>";

$x = "Hello World!";
echo substr($x, 6, 5);
echo "<br>";

$x = "Hello World!";
echo substr($x, 6);
echo "<br>";

$x = "Hello World!";
echo substr($x, -5, 3);
echo "<br>";

$x = "Hi, how are you?";
echo substr($x, 5, -3);
echo "<br>";














