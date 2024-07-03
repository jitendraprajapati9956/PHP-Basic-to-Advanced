<?php
echo "<h2>PHP OOP - Traits</h2>";
echo "<br>";


trait message1 {
    public function msg1() {
      echo "OOP is fun! "; 
    }
  }
  
  class Welcome {
    use message1;
  }
  
  $obj = new Welcome();
  $obj->msg1();
  
  echo "<br>";
  

  echo "Example Explained";
  echo "<br>";
  echo "Here, we declare one trait: message1. Then, we create a class: Welcome. The class uses the trait, and all the methods in the trait will be available in the class.
If other classes need to use the msg1() function, simply use the message1 trait in those classes. This reduces code duplication, because there is no need to redeclare the same method over and over again.";
echo "<br>";
  
echo "<h2>PHP - Using Multiple Traits</h2>";
echo "<br>";
  
trait message3 {
    public function msg1() {
      echo "OOP is fun! "; 
    }
  }
  
 trait message4 {
    public function msg2() {
      echo "OOP reduces code duplication!"; 
    }
  }
  
  class Welcome {
    use message3;
  }
  
  class Welcome2 {
    use message3, message4;
  }
  
  $obj = new Welcome();
  $obj->msg1();
  echo "<br>";
  
  
  $obj2 = new Welcome2();
  $obj2->msg1();
  $obj2->msg2();
  
  
  
  
  ?>