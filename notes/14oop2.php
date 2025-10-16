<!-- Inheritence & More -->
<?php
class User
{
  public $name;
  public $email;
  protected $status = 'active';

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  public function login()
  {
    echo $this->name . ' logged in.';
  }
}

class Admin extends User
{
  public $level;

  public function __construct($name, $email, $level)
  {
    $this->level = $level;
    // Calling the constructor in the parent
    parent::__construct($name, $email);
  }

  public function getStatus()
  {
    echo $this->status;
  }

  // To override a parent method (a little polymorphism):
  public function login()
  {
    echo 'Admin ' . $this->name . ' logged in.';
  }
}

$admin1 = new Admin('Tom Smith', 'tom@gmail.com', 5);
// echo $admin1->name;
// echo $admin1->email;
// $admin1->login();

// var_dump($admin1);
$admin1->login();

?>

<?php

//! Static Methods & Members 

class MathUtility
{
  public static $pi = 3.14;

  public static function add(...$nums)
  {
    return array_sum($nums);
  }
}

// $mathUtil1 = new MathUtility();
// $mathUtil2 = new MathUtility();
// echo $mathUtil1->pi;

//* Suppose we don't want or need to make a new instance everytime we need to access pi.
//* We can make it a static property / method and access it directly from the class: 
// Using the scope resolution operator:
echo MathUtility::$pi;
echo MathUtility::add(1,2,3,4,5);
?>