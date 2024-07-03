<?php
namespace myArea;

function myValue2(){
  return __NAMESPACE__;
}

define("GREETING", "Welcome to PHP");
echo GREETING;



define("GREETING", "Welcome to PHP", true);
echo greeting;


const MYCAR = "Volvo";
echo MYCAR;


define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);
  echo cars[0];



  define("GREETING", "Welcome to PHP");

  function myTest() {
    echo GREETING;
  }
  
  myTest();

  class Fruits {
    public function myValue(){
      return __CLASS__;
    }
  }
  $kiwi = new Fruits();
  echo $kiwi->myValue();
  
  echo __DIR__;

  echo __FILE__;

  function myValue(){
    return __FUNCTION__;
  }
  echo myValue();

  echo __LINE__;


  class Fruits {
    public function myValue(){
      return __METHOD__;
    }
  }
  $kiwi = new Fruits();
  echo $kiwi->myValue();

  echo myValue2();

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

  namespace myArea;

  class Fruits {
    public function myValue(){
      return Fruits::class;
    }
  }
  $kiwi = new Fruits();
  echo $kiwi->myValue();









?>