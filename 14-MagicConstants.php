<?php
namespace myArea;

function myValue3(){
  return __NAMESPACE__;
  return Fruits2::class;
}

    
 
echo "<h2>PHP Magic Constants</h2>";
echo "<br>";

echo "<h3>Predefined Constants</h3>";
echo "<br>";

echo "<h4>1.__CLASS__</h4>";
echo "<br>";
class Fruits {
    public function myValue(){
      return __CLASS__;
    }
  }
  $kiwi = new Fruits();
  echo $kiwi->myValue();
  echo "<br>";
   

  echo "<h4>2.__DIR__</h4>";
  echo "<br>";
  echo __DIR__;

  echo "<br>";
  echo "<h4>3.__FILE__</h4>";
  echo "<br>";

  echo __FILE__;

  echo "<br>";
  echo "<h4>4.__FUNCTION__</h4>";
  echo "<br>";

  function myValue(){
    return __FUNCTION__;
  }

  echo myValue();

  echo "<br>";
  echo "<h4>5.__LINE__</h4>";
  echo "<br>";

  echo __LINE__;

  echo "<br>";
  echo "<h4>6.__METHOD__</h4>";
  echo "<br>";

  class Fruits2 {
    public function myValue2(){
      return __METHOD__;
    }
  }
  $kiwi = new Fruits2();
  echo $kiwi->myValue2();
  echo "<br>";

  echo "<h4>7.__NAMESPACE__</h4>";
  echo "<br>";

  echo myValue3();


  echo "<br>";

  echo "<h4>8.__TRAIT__</h4>";
  echo "<br>";

  trait message1 {
    public function msg1() {
      echo __TRAIT__; 
    }
  }
  
  class Welcome {
    use message1;
  }
  
  $obj = new Welcome();
  $obj->msg1();

  echo "<br>";

  echo "<h4>9.ClassName::class</h4>";
  echo "<br>";

  $kiwi = new Fruits2();
  echo $kiwi->myValue2();

  echo "<br>";
?>