<!-- OOP in PHP -->

<!-- 
Key Concepts to Remember: 
  Objects = Self-contained unit that encapsulates properties and methods
  Classes = Blueprints for an object
  Inheritance = Allows one class to inherit properties/methods from another
  Encapsulation = Bundling the data and methods into a single unit
  Polymorphism = Allows objects of different classes to be treated as objects of a common superclass
-->

<?php
//* Class - The Blueprint of our Object

class User
{
  //? Public is for visibility of the property, can be accessed from outside of the class.
  public $name;
  public $email;

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  //? Methods Reminder - Functions that belong to a class.
  public function login()
  {
    echo $this->name . ' logged in.';
  }
}

//* Instantiating a new object with our class:
$user1 = new User('John Doe', 'john@gmail.com');

//? Having a constructor makes this kind of code irrelevant: 
// $user1->name = 'John Doe';
// $user1->email = 'john@gmail.com';

// var_dump($user1);
$user1->login();

$user2 = new User('Jane Doe', 'jane@gmail.com');
// var_dump($user1);
?>