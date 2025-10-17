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
echo MathUtility::add(1, 2, 3, 4, 5);

//! Abstract Classes
abstract class Shape
{
  protected $name;

  abstract public function calculateArea();

  public function __construct($name)
  {
    $this->name = $name;
  }

  // Concrete Methods
  public function getName()
  {
    return $this->name;
  }
}

// If you extend from an abstract, you must implement the abstract methods too
class Circle extends Shape
{
  private $radius;
  public function __construct($name, $radius)
  {
    parent::__construct($name);
    $this->radius = $radius;
  }

  public function calculateArea()
  {
    return pi() * pow($this->radius, 2);
  }
}

class Rectangle extends Shape
{
  private $width;
  private $height;

  public function __construct($name, $height, $width)
  {
    parent::__construct($name);
    $this->height = $height;
    $this->width = $width;
  }

  public function calculateArea()
  {
    return $this->width * $this->height;
  }
}

$circle = new Circle('Circle', 5);
var_dump($circle);

$rectangle = new Rectangle('Rectangle', 4, 6);
echo $circle->getName() . ' Area: ' . $circle->calculateArea() . '<br>';
echo $rectangle->getName() . ' Area: ' . $rectangle->calculateArea() . '<br>';

//! Interfaces - A 'contract' for classes
interface ContentInterface
{
  public function display();
  public function edit();
}

class Article implements ContentInterface
{
  private $title;
  private $content;

  public function __construct($title, $content)
  {
    $this->title = $title;
    $this->content = $content;
  }

  public function display()
  {
    echo "<h2>{$this->title}</h2>";
    echo "<p>{$this->content}</p>";
  }

  public function edit()
  {
    echo "Editing this article '{$this->title}'";
  }
}

class Video implements ContentInterface
{
  private $title;
  private $url;

  public function __construct($title, $url)
  {
    $this->title = $title;
    $this->url = $url;
  }

  public function display()
  {
    echo "<h2>{$this->title}</h2>";
    echo "<iframe src='{$this->url}'></iframe>";
  }

  public function edit()
  {
    echo "Editing this video: '{$this->title}'";
  }
}

$article = new Article('Introduction to PHP', 'PHP is a versatile scripting language...');
$video = new Video('PHP for All', 'https://udemy.com');
?>