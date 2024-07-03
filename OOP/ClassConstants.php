<?php
echo "<h2>PHP OOP - Class Constants</h2>";
echo "<br>";

class Goodbye {
    const LEAVING_MESSAGE = "Thank you for visiting PHP";
  }
  
  echo Goodbye::LEAVING_MESSAGE;

  echo "<br>";


  class Goodbye2 {
    const LEAVING_MESSAGE = "Thank you for visiting PHP";
    public function byebye() {
      echo self::LEAVING_MESSAGE;
    }
  }
  
  $goodbye = new Goodbye2();
  $goodbye->byebye();







?>