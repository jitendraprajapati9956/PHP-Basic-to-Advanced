<?php

echo "<h1>PHP and JSON</h1>";
echo "<br>";

echo "<h2>PHP - json_encode()</h2>";
echo "<br>";

$age = array("Jitendrar"=>22, "Rajesh"=>25, "Naran"=>28);

echo json_encode($age);
echo "<br>";

$cars = array("Volvo", "BMW", "Toyota");

echo json_encode($cars);

echo "<br>";

echo "<h2>PHP - json_decode()</h2>";
echo "<br>";


$jsonobj = '{"Jitendra":22,"Rajesh":25,"Naran":28}';
 
var_dump(json_decode($jsonobj));
echo "<br>";

var_dump(json_decode($jsonobj, true));
echo "<br>";

echo "<h2>PHP - Accessing the Decoded Values</h2>";
echo "<br>";

$obj = json_decode($jsonobj);

echo $obj->Jitendra . "<br>";
echo $obj->Rajesh . "<br>";
echo $obj->Naran . "<br>";
echo "<br>";
$arr = json_decode($jsonobj, true);

echo $arr["Jitendra"];
echo $arr["Rajesh"];
echo $arr["Naran"];
echo "<br>";


echo "<h2>PHP - Looping Through the Values</h2>";
echo "<br>";

$obj = json_decode($jsonobj);

foreach($obj as $key => $value) {
  echo $key . " => " . $value . "<br>";
}

echo "<br>";
$arr = json_decode($jsonobj, true);

foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>