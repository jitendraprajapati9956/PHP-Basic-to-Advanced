<?php
echo "<h2>PHP OOP - Interfaces</h2>";
echo "<br>";


echo "<h3>PHP - Using Interfaces</h3>";
echo "<br>";

interface Animal {
    public function makeSound();
  }
  
  class Cat implements Animal {
    public function makeSound() {
      echo "Meow";
    }
  }
  
  $animal = new Cat();
  $animal->makeSound();

  echo "<br>";


  // Interface definition
interface Animal2 {
    public function makeSound();
  }
  
  // Class definitions
  class Cat2 implements Animal2 {
    public function makeSound() {
      echo " Meow ";
    }
  }
  
  class Dog2 implements Animal2 {
    public function makeSound() {
      echo " Bark ";
    }
  }
  
  class Mouse2 implements Animal2 {
    public function makeSound() {
      echo " Squeak ";
    }
  }
  
  // Create a list of animals
  $cat = new Cat2();
  $dog = new Dog2();
  $mouse = new Mouse2();
  $animals = array($cat, $dog, $mouse);
  
  // Tell the animals to make a sound
  foreach($animals as $animal) {
    $animal->makeSound();
  }

  echo "<h6>Example Explained</h6>";
echo "Cat, Dog and Mouse are all classes that implement the Animal interface, which means that all of them are able to make a sound using the makeSound() method. Because of this, we can loop through all of the animals and tell them to make a sound even if we don't know what type of animal each one is.

Since the interface does not tell the classes how to implement the method, each animal can make a sound in its own way.";

?>