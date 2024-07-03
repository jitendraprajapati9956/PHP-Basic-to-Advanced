<?php

echo "<h2>PHP OOP - Inheritance</h2>";
echo "<br>";

class Fruit {
    public $name;
    public $color;
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color; 
    }
    public function intro() {
      echo "The fruit is {$this->name} and the color is {$this->color}."; 
    }
  }
  
  // Strawberry is inherited from Fruit
  class Strawberry extends Fruit {
    public function message() {
      echo "Am I a fruit or a berry? "; 
    }
  }
  
  $strawberry = new Strawberry("Strawberry", "red");
  $strawberry->message();
  $strawberry->intro();

  echo "<h6>The Strawberry class is inherited from the Fruit class.

This means that the Strawberry class can use the public name and color properties as well as the public __construct() and intro() methods from the Fruit class because of inheritance.

The Strawberry class also has its own method: message().</h6>";


echo "<br>";
echo "<h2>PHP - Inheritance and the Protected Access Modifier</h2>";
echo "<br>";

class Fruit2 {
    public $name;
    public $color;
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color; 
    }
    protected function intro2() {
      echo "The fruit is {$this->name} and the color is {$this->color}."; 
    }
  }

  class Strawberry2 extends Fruit2 {
    public function message2() {
      echo "Am I a fruit or a berry? "; 
       // Call protected method from within derived class - OK
      //$strawberry2->intro2();
    }
  }
  
  // Try to call all three methods from outside class
  $strawberry2 = new Strawberry2("Strawberry", "red");  // OK. __construct() is public
  $strawberry2->message2(); // OK. message() is public
 // $strawberry2->intro2(); // ERROR. intro() is protected

  echo "<br>";
  echo "<h2>Overriding Inherited Methods</h2>";
  echo "<br>";

  class Fruit3 {
    public $name;
    public $color;
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color; 
    }
    public function intro() {
      echo "The fruit is {$this->name} and the color is {$this->color}."; 
    }
  }
  
  class Strawberry3 extends Fruit3 {
    public $weight;
    public function __construct($name, $color, $weight) {
      $this->name = $name;
      $this->color = $color;
      $this->weight = $weight; 
    }
    public function intro() {
      echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram."; 
    }
  }
  
  $strawberry = new Strawberry3("Strawberry", "red", 50);
  $strawberry->intro();


  echo "<br>";
  echo "<h2>PHP - The final Keyword</h2>";
  echo "<br>";

  final class Fruit4 {
    public $name;
    public $color;
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color; 
    }
    public function intro() {
      echo "The fruit is {$this->name} and the color is {$this->color}."; 
    }
  }
  
  class Strawberry extends Fruit4 {
    public $weight;
    public function __construct($name, $color, $weight) {
      $this->name = $name;
      $this->color = $color;
      $this->weight = $weight; 
    }
    public function intro() {
      echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram."; 
    }
  }
  
  $strawberry = new Strawberry("Strawberry", "red", 50);
  $strawberry->intro();

  echo "<br>";


 class Fruit5 {
    public $name;
    public $color;
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color; 
    }
    final  public function intro() {
      echo "The fruit is {$this->name} and the color is {$this->color}."; 
    }
  }
  
  class Strawberry extends Fruit5 {
    public $weight;
    public function __construct($name, $color, $weight) {
      $this->name = $name;
      $this->color = $color;
      $this->weight = $weight; 
    }
    public function intro() {
      echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram."; 
    }
  }
  
  $strawberry = new Strawberry("Strawberry", "red", 50);
  $strawberry->intro();



?>