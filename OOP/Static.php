<?php
echo "<h2>PHP OOP - Static Methods</h2>";
echo "<br>";


class greeting {
    public static function welcome() {
      echo "Hello World!";
    }
  }
  
  // Call static method
  greeting::welcome();


  echo "Example Explained";
  echo "<br>";
  echo "Here, we declare a static method: welcome(). Then, we call the static method by using the class name, double colon (::), and the method name (without creating an instance of the class first).";
  echo "<br>";


  echo "<h2>PHP - More on Static Methods</h2>";
  echo "<br>";

  class greeting2 {
    public static function welcome() {
      echo "Hello World!";
    }
    public function __construct() {
      self::welcome();
    }
  }
  
  new greeting2();

  echo "<br>";

  class A {
    public static function welcome() {
      echo "Hello World!";
    }
  }
  
  class B {
    public function message() {
      A::welcome();
    }
  }
  
  $obj = new B();
  echo $obj -> message(); 

  echo "<br>";

  class domain {
    protected static function getWebsiteName() {
      return "google.com";
    }
  }
  
  class domainW3 extends domain {
    public $websiteName;
    public function __construct() {
      $this -> websiteName = parent::getWebsiteName();
    }	
  }
  
  $domainW3 = new domainW3;
  echo $domainW3 -> websiteName;

  echo "<br>";
  echo "<h2>PHP OOP - Static Properties</h2>";
  echo "<br>";

  class pi {
    public static $value = 3.14159;
  }
  
  // Get static property
  echo pi::$value;
  echo "<br>";
  echo "Example Explained";
  echo "Here, we declare a static property: value. Then, we echo the value of the static property by using the class name, double colon (::), and the property name (without creating a class first).
";
echo "<br>";

  echo "<h2>PHP - More on Static Properties</h2>";
  echo "<br>";

  class pi2 {
    public static $value=3.14159;
    public function staticValue() {
      return self::$value;
    }
  }
  
  // Get static property
  $pi = new pi2();
  echo $pi->staticValue();

  echo "<br>";


  class pi3 {
    public static $value=3.14159;
  }
  
  class x extends pi3 {
    public function xStatic() {
      return parent::$value;
    } 
  }
  
  // Get value of static property directly via child class
  echo x::$value;
  
  
  // Get value of static property via xStatic() method
  $x = new x();
  echo $x->xStatic();



?>