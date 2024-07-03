<?php

echo "<h1>PHP Conditional[if,else,break,continue]</h1>";
echo "<br>";

$age = 20;
$salary = 300000;


echo "<h2>If statement:</h2>";
echo "<br>";
// Sample if
echo "age:".$age;
echo "<br>";
echo "if(age == 20):";
echo "<br>";

if ($age == 20) {
    echo "1";
}
echo "<br>";


echo "if(age === 20):";
echo "<br>";
// Without circle braces
if ($age === 20)
    echo "1";
    echo "<br>";

echo "<br>";



echo "<h2>If-Else statement:</h2>";
echo "<br>";
echo "if(age > 20):";
echo "<br>";
// Sample if-else
if ($age > 20) {
    echo "1";
} else {
    echo "2";
}
echo "<br>";



echo "<h2>Shorthand if Statements:</h2>";
echo "<br>";
echo "if (a < 10) b = Hello;";
echo "<br>";
$a = 5;

if ($a < 10) $b = "Hello";

echo $b;
echo "<br>";


echo "<h2>Shorthand If...Else Statements:</h2>";
echo "<br>";
echo "$b = $a < 10 ? Hello : Good Bye;";
echo "<br>";
$a = 13;
$b = $a < 10 ? "Hello" : "Good Bye";
echo $b;
echo "<br>";

echo "<h2>Nested if Statement:</h2>";
echo "<br>";
$a = 13;

if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}
echo "<br>";

// Difference between == and ===
$age == 20; // true
$age == '20'; // true

$age === 20; // true
$age === '20'; // false

// if AND
if ($age > 20 && $salary === 300000) {

}
// if OR
if ($age > 20 OR $salary === 300000) {

}


// Ternary if
echo "<h2>Ternary if:</h2>";
echo "<br>";
echo "age < 22 ? 'Young' : 'Old';";
echo "<br>";
echo $age < 22 ? 'Young' : 'Old';
echo '<br>';
echo '<br>';
// Short ternary
$myAge = $age ?: 18; // Equivalent of "$age ? $age : 18"


echo "<h2>Null coalescing operator:</h2>";
echo "<br>";
echo "name ?? 'Jitendra';";
echo "<br>";
// Null coalescing operator
$var = isset($name) ? $name : 'Jitendra';
$var = $name ?? 'Jitendra'; // Equivalent of above
echo $var.'<br>';

echo "<h2>switch statement:</h2>";
echo "<br>";
echo "switch (userRole) {";
echo "<br>";

// switch
$userRole = 'admin'; // admin, editor, user

switch ($userRole) {
    case 'admin':
        echo 'You can do anything<br>';
        break;
    case 'editor';
        echo 'You can edit content<br>';
        break;
    case 'user':
        echo 'You can view posts and comment<br>';
        break;
    default:
        echo 'Unknown role<br>';
}

echo "<br>";
$d = 3;

switch ($d) {
  case 1:
  case 2:
  case 3:
  case 4:
  case 5:  
    echo "The weeks feels so long!";
    break;
  case 6:
  case 0:
    echo "Weekends are the best!";
    break;
  default:
    echo "Something went wrong";
}




?>
