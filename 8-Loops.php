<?php

echo "<h1>PHP Loops</h1>";
echo "<br>";



echo "While Loop:";
echo "<br>";

$counter = 0; 
while ($counter < 10) {
    echo "Times:".$counter.'<br>';
     if ($counter > 5) break;
    $counter++;
}
echo "<br>";



echo "Do-While Loop:";
echo "<br>";
// do - while
$counter = 0; 
do {
  echo "do-while Times:".$counter.'<br>';
    $counter++;
} while ($counter < 10);

echo "<br>";

echo "For Loop:";
echo "<br>";

for ($i = 0; $i < 10; $i++) {
    echo  "For Loop Times:". $i."<br>";
}


echo "<br>";

echo "For-Each Loop:";
echo "<br>";

// foreach
$fruits = ["Banana", "Apple", "Orange"];

foreach ($fruits as $i => $fruit) {
    echo $i . ' ' . $fruit . '<br>';
}

// Iterate Over associative array.
$person = [
    'name' => 'Jitendra',
    'surname' => 'Prajapati',
    'age' => 30,
    'hobbies' => ['Traveling', 'Chess'],
];

foreach ($person as $key => $value) {
    if ($key === 'hobbies') {
        break;
    }
    echo $key . ' ' . $value . '<br>';
}


//Break
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      break;
    }
    echo "The number is: $x <br>";
  }

  $x = 0;

  while($x < 10) {
    if ($x == 4) {
      break;
    }
    echo "The number is: $x <br>";
    $x++;
  }

  $i = 1;

  do {
    if ($i == 3) break;
    echo $i;
    $i++;
  } while ($i < 6);

  $colors = array("red", "green", "blue", "yellow");

  foreach ($colors as $x) {
    if ($x == "blue") break;
    echo "$x <br>";
  }

//Continue

for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "The number is: $x <br>";
  }
  
  $x = 0;

  while($x < 10) {
    if ($x == 4) {
      continue;
    }
    echo "The number is: $x <br>";
    $x++;
  }
  
  $i = 0;

  do {
    $i++;
    if ($i == 3) continue;
    echo $i;
  } while ($i < 6);

  $colors = array("red", "green", "blue", "yellow");

  foreach ($colors as $x) {
    if ($x == "blue") continue;
    echo "$x <br>";
  }





