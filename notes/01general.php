<!-- All PHP code begins and ends with <?php ?> -->
<?php
echo "Hello from PHP!";
// Echo is similar to console.log in JS or print() in Python.
// < ?= ? > (with no spaces) is also a shortcut to insert PHP code into an HTML document.
echo '<br />';
//? Print is far less common than echo and print only allows a single value, echo can have as many as you want seperated by a comma.
print 'Hello from the Print Statement.';
?>

<h1><?= 'Header!' ?></h1>


<!-- php file.php -->
<!-- php -S localhost:8000 / filename.php -->

<?php
/* 
! Variables
Declared with a dollar sign ($) and must start with a letter or underscore.
Cannot start with a number and they can only contain letters, numbers and/or underscores.
They ARE case sensitivie $name !== $Name
* Type declarations are not needed, PHP is a loosely-typed language.
*/

$title = "Learn PHP from Scratch - This is a variable!";

//* Strings
$name = "Matthew James";
$name2 = 'James Smith';

// var_dump provides us information about a variable (length and contents), this will output: string(13) "Matthew James"
var_dump($name);
echo '<br/>';
// getType provides just the type of value that is being passed in.
echo getType($name2);

//* Integers
$age = 34;
var_dump($age);
echo '<br/>';

//* Floats
$rating = 4.5;
var_dump($rating);
echo '<br/>';

//* Booleans
$isLoaded = true;
var_dump($isLoaded);
echo '<br/>';

//* Arrays
$friends = ["Jim", "Scott", "Austin"];
var_dump($friends);
echo '<br/>';

//* Objects
$person = new stdClass();
var_dump($person);
echo '<br/>';

//* Null
$car = null;
var_dump($car);
echo '<br/>';

//* Resource - New to me!
// fopen() will open a file found in the url argument
// $file = fopen('sample.text', 'r');
// var_dump($file);

?>

<h1><?= $title ?></h1>