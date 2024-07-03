<?php


echo "<h2>PHP OOP - Constructor</h2>";
echo "<h3>PHP - The __construct Function</h3>";

class Fruit5 {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name; 
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit5("Apple");
echo $apple->get_name();
echo "<br>";


class Fruit6 {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name; 
    $this->color = $color; 
  }
  function get_name() {
    return $this->name;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new Fruit6("Apple", "Red");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();
echo "<br>";

echo "<br>";
echo "<h3>PHP - The __destruct Function</h3>";

class Fruit7 {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name; 
  }
  function __destruct() {
    echo "The fruit is {$this->name}."; 
  }
}

$apple = new Fruit7("Apple");
echo "<br>";

class Fruit8 {
  // Properties
  var $name;
  var $color;

  // Methods
  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  function __destruct() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
  }
}

$apple = new Fruit8("Apple", "red");
echo "<br>";


























?>