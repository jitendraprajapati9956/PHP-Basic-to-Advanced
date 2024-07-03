<?php
echo "<h1>OOP</h1>";
echo "<br>";


echo "<h2>OOP - Classes and Objects</h2>";
echo "<br>";


class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }

  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Red');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
echo "<br>";

echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " .  $apple->get_color();


echo "<br>";


echo "<h2>PHP - The this Keyword</h2>";
echo "<br>";
echo "<h3>Inside the class (by adding a set_name() method and use this):</h3>";
class Fruit2 {
  public $name;
  function set_name($name) {
    $this->name = $name;
  }
}
$apple = new Fruit2();
$apple->set_name("Apple");

echo $apple->name;

echo "<br>";
echo "<h3>Outside the class (by directly changing the property value):</h3>";

class Fruit3 {
  public $name;
}
$apple = new Fruit3();
$apple->name = "Apple";

echo $apple->name;

echo "<br>";
echo "<h2>PHP - instanceof</h2>";


class Fruit4 {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit4();
var_dump($apple instanceof Fruit4);


echo "<br>";


echo "<h2>Cast to Array</h2>";
echo "<br>";
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");

$myCar = (array) $myCar;
var_dump($myCar);


echo "<h2>Cast to Object</h2>";
echo "<br>";


$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (object) $a;
$b = (object) $b;
$c = (object) $c;
$d = (object) $d;
$e = (object) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);


echo "<h2>Converting Arrays into Objects:</h2>";
echo "<br>";

$a = array("Volvo", "BMW", "Toyota"); // indexed array
$b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); // associative array

$a = (object) $a;
$b = (object) $b;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);


echo "<br>";
echo "<h2>PHP - Access Modifiers</h2>";
echo "<br>";

class Fruit9 {
  public $name;
  public $color;
  public $weight;

  function set_name($n) {  // a public function (default)
    $this->name = $n;
  }
  protected function set_color($n) { // a protected function
    $this->color = $n;
  }
  private function set_weight($n) { // a private function
    $this->weight = $n;
  }
}

$mango = new Fruit9();
$mango->set_name('Mango'); // OK
//$mango->set_color('Yellow'); // ERROR  protected function
//$mango->set_weight('300'); // ERROR  private function







?> 