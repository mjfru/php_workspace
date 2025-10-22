<?php

//! OOP Challenges:
/*
* Challenge 1

TODO 1. Create a class called `Article` that has the following properties:
- `title`
- `content`
- `published`

TODO 2. The `published` property should be `private` and have a default value of `false`.

TODO 3. Create a constructor that takes in the `title` and `content` as arguments and sets the values of the properties.

TODO 4. Create a method called `publish` that changes the value of the `published` property to `true`.

TODO 5. Create a method called `isPublished` that returns the value of the `published` property. Remember, it is private, so we can not access it directly outside of the class.

TODO 6. Create two new instances of the `Article` class and call the `publish` method on one of them, which should set the `published` property to `true`. Then call the `isPublished` method on both of the articles to see if they are published.

? When you echo out the result of the `isPublished` method, you can wrap it in a `var_dump` or `var_export` function to see the actual true or false value instead of just `1` or `0`.
*/

class Article
{
  public $title;
  public $content;
  private $published = false;

  public function __construct($title, $content)
  {
    $this->title = $title;
    $this->content = $content;
  }

  public function publish()
  {
    $this->published = true;
  }

  public function isPublished()
  {
    return $this->published;
  }
}

$article1 = new Article("test1", "sampleContent");
$article2 = new Article("test2", "moreSampleContent");

$article1->publish();
var_export($article1->isPublished());

var_export($article2->isPublished());

?>

<?php
/*
* Challenge 2

TODO 1. Create a class called `StringUtility` that has the following static methods:

- `shout($string)` - Takes in a string and returns it in all uppercase letters with an exclamation mark added to the end.

- `whisper($string)` - Takes in a string and returns it in all lowercase letters with a period added to the end.

- `repeat($string, $times)` - Takes in a string and a number and returns the string repeated the specified number of times. Use a default value of `2` for the `$times` parameter.

TODO 2. Create a new instance of the `StringUtility` class and call each of the methods on it.

? Hints

- You can use the `strtoupper` and `strtolower` functions to convert a string to uppercase or lowercase.
- You can use the `str_repeat` function to repeat a string a certain number of times.

*/

class StringUtility
{
  public function shout($string)
  {
    return strtoupper($string) . "!";
  }

  public function whisper($string)
  {
    return strtolower($string) . ".";
  }

  public function repeat($string, $times = 2)
  {
    return str_repeat($string, $times);
  }
}

$stringInstance = new StringUtility();
echo $stringInstance->shout("hello");
echo $stringInstance->whisper("goodBYE");
echo $stringInstance->repeat("listen");

?>