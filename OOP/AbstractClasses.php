<?php
echo "<h2>PHP OOP - Abstract Classes</h2>";
echo "<br>";


// Parent class
abstract class Car {
    public $name;
    public function __construct($name) {
      $this->name = $name;
    }
    abstract public function intro() : string; 
  }
  
  // Child classes
  class Audi extends Car {
    public function intro() : string {
      return "Choose German quality! I'm an $this->name!"; 
    }
  }
  
  class Volvo extends Car {
    public function intro() : string {
      return "Proud to be Swedish! I'm a $this->name!"; 
    }
  }
  
  class Citroen extends Car {
    public function intro() : string {
      return "French extravagance! I'm a $this->name!"; 
    }
  }
  
  // Create objects from the child classes
  $audi = new audi("Audi");
  echo $audi->intro();
  echo "<br>";
  
  $volvo = new volvo("Volvo");
  echo $volvo->intro();
  echo "<br>";
  
  $citroen = new citroen("Citroen");
  echo $citroen->intro();

  echo "<br>";
  echo "<h6>Example Explained</h6>";
  echo "The Audi, Volvo, and Citroen classes are inherited from the Car class. This means that the Audi, Volvo, and Citroen classes can use the public name property as well as the public __construct() method from the Car class because of inheritance.
But, intro() is an abstract method that should be defined in all the child classes and they should return a string.";
 
 
 echo "<br>";
 echo "<br>";
 
 abstract class ParentClass {
    // Abstract method with an argument
    abstract protected function prefixName($name);
  }
  
  class ChildClass extends ParentClass {
    public function prefixName($name) {
      if ($name == "Jitendra") {
        $prefix = "Mr.";
      } elseif ($name == "Jinal") {
        $prefix = "Mrs.";
      } else {
        $prefix = "";
      }
      return "{$prefix} {$name}";
    }
  }
  
  $class = new ChildClass;
  echo $class->prefixName("Jitendra");
  echo "<br>";
  echo $class->prefixName("Jinal");
 
  echo "<br>";
  echo "<br>";
 
 
  abstract class ParentClass2 {
    // Abstract method with an argument
    abstract protected function prefixName($name);
  }
  
  class ChildClass2 extends ParentClass2 {
    // The child class may define optional arguments that is not in the parent's abstract method
    public function prefixName($name, $separator = ".", $greet = "Dear") {
      if ($name == "Jitendra") {
        $prefix = "Mr";
      } elseif ($name == "Jinal") {
        $prefix = "Mrs";
      } else {
        $prefix = "";
      }
      return "{$greet} {$prefix}{$separator} {$name}";
    }
  }
  
  $class = new ChildClass2;
  echo $class->prefixName("Jitendra");
  echo "<br>";  
  echo $class->prefixName("Jinal");
 
 
 
 
 ?>