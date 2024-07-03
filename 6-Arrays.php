<?php

echo "<h1>PHP Arrays</h1>";
echo "<br>";


// Create array
$fruits = ["Banana", "Apple", "Orange"];

// Print the whole array
echo '<pre>';
var_dump($fruits); // print_r
echo '</pre>';

$cars = [
  "Volvo",
  "BMW",
  "Toyota"
];
var_dump($cars);

echo "<br>";

$cars = [
  "Volvo",
  "BMW",
  "Toyota",
];
var_dump($cars);
echo "<br>";

$cars = [
  0 => "Volvo",
  1 => "BMW",
  2 =>"Toyota"
];

var_dump($cars);
echo "<br>";

$myCar = [];
$myCar["brand"] = "Ford";
$myCar["model"] = "Mustang";
$myCar["year"] = 1964;

var_dump($myCar);
echo "<br>";

echo "<h2>Access Indexed Arrays</h2>";
echo "<br>";


// Get element by index
echo $fruits[1].'<br>';
var_dump($fruits);
echo "<br>";
// Set element by index
$fruits[0] = "Peach";
var_dump($fruits);
echo "<br>";

echo "<br>";
echo "<h2>Loop Through an Indexed Array</h2>";
echo "<br>";

$cars = array("Volvo", "BMW", "Toyota"); 

foreach ($cars as $x) {
  echo "$x <br>";
}

echo "<br>";
echo "<h2>Index Number</h2>";
echo "<br>";

$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

array_push($cars, "Ford");
var_dump($cars);


echo "<br>";

// Check if array has element at index 2
echo '<pre>';
var_dump(isset($fruits[2]));
echo '</pre>';

// Print the length of the array
echo count($fruits).'<br>';

// Add element at the end of the array
$fruits[] = 'Peach';
echo $fruits[3].'<br>';
array_push($fruits, 'Foo');

// Remove element from the end of the array
array_pop($fruits);

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Add element at the beginning of the array
array_unshift($fruits, 'Apple');

// Remove element from the beginning of the array
array_shift($fruits);

// Split the string into an array
$string = "Banana,Apple,Peach";
echo '<pre>';
var_dump(explode(",", $string));
echo '</pre>';

print_r($fruits);

// Combine array elements into string
echo implode(",", $fruits).'<br>';

// Check if element exist in the array
echo '<pre>';
var_dump(in_array('Apple', $fruits));
echo '</pre>';

// Search element index in the array
echo '<pre>';
var_dump(array_search("Peach", $fruits));
echo '</pre>';

// Merge two arrays
$vegetables = ['Potato', 'Cucumber'];
echo '<pre>';
var_dump(array_merge($fruits, $vegetables));
/* var_dump([...$fruits, ...$vegetables]); // Since PHP 7.4 */
echo '</pre>';

// Sorting of array (Reverse order also)
sort($fruits); //sort, rsort
echo '<pre>';
var_dump($fruits);
echo '</pre>';


// ============================================
// Associative arrays
// ============================================

echo "<h2>PHP Associative Arrays</h2>";
echo "<br>";

// Create an associative array
$person = [
    'name' => 'Jitendra',
    'surname' => 'Prajapati',
    'age' => 22,
    'hobbies' => ['Travelling', 'Chess'],
];
// Get element by key
echo $person['name'].'<br>';

// Set element by key
$person['channel'] = 'Jitendra Prajapati';

//Null coalescing assignment operator. Since PHP 7.4
if (!isset($person['address'])){
    $person['address'] = 'Unknown';
}
/* $person['address'] ??= 'Unknown'; */
echo $person['address'].'<br>';

// Check if array has specific key
echo '<pre>';
var_dump(isset($person['age']));  // Change age into "location"
echo '</pre>';

// Print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

echo "<br>";
echo "<h2>Sorting associative arrays by values, by keys</h2>";
echo "<br>";
 
ksort($person); // ksort, krsort, asort, arsort
echo '<pre>';
var_dump($person);
echo '</pre>';


echo "<br>";
echo "<h2>Two-dimensional Arrays</h2>";
echo "<br>";

$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
  echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
  echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
  echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
  echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";


  for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
      for ($col = 0; $col < 3; $col++) {
        echo "<li>".$cars[$row][$col]."</li>";
      }
    echo "</ul>";
  }



  ?>