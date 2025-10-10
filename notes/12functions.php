<!--  
Functions in PHP

Basic Function Syntax:
function functionName(parameter1, parameter2) {
  Code to be exectuted
}

Calling the function:
functionName();

Extremely similar to JS!
However, PHP does not have lexical scope like JS.
A global function cannot be accessed within a function.
  If you want to do this, you need to use the syntax:
    global $variableName
  within your function
Of course, a local function cannot be accessed globally either.
-->

<?php
function sayHello($name)
{
  echo "Hello, " . $name . "<br>";
}

sayHello("Matt");


function sayGoodbye()
{
  return 'Goodbye.';
}

echo sayGoodbye();

function add($num1, $num2)
{
  return $num1 + $num2;
}

echo add(100, 200);

// The splat (rest in JS) operator:
function addAll(...$numbers)
{
  $total = 0;
  foreach ($numbers as $number) {
    $total += $number;
  }
  return $total;
}

echo addAll(100, 300, 400, 20, 45);


// Scope Example
$timeOfDay = "Evening";
function greet()
{
  global $timeOfDay;
  echo "Good " . $timeOfDay;
}

greet();

//! Constants in PHP - For variables that won't be changed or manipulated
//? These are usually reserved for configuration values
define('APP_NAME', 'My App');
define('APP_VERSION', '1.0.0');

const DB_NAME = 'mydb';;
const DB_HOST = 'localhost';

echo DB_NAME, DB_HOST;

//! Declaring Types in PHP
/*
? - This must be the first line: 
declare(strict_types = 1);

function getSum(int $a, int $b): int {
  return $a + $b;
}

getSum(1, 1)
*/
?>


<!-- Anonmyous Functions in PHP -->
<?php
$square = function ($number) {
  return $number * $number;
};

$result = $square(5);
echo 'The square of 5 is ' . $result . '<br>';
?>

<!-- Closures -->
<?php
function createCounter()
{
  $count = 0;
  $counter = function () use (&$count) {
    return ++$count;
  };

  return $counter;
}

$counter = createCounter();
echo $counter() . '<br>';
echo $counter() . '<br>';
echo $counter() . '<br>';

?>

<!-- Callback Functions -->
<?php
$numbers = [1, 2, 3, 4, 5];

$square = function ($number) {
  return $number * $number;
};

$squaredNumbers = array_map($square, $numbers);


print_r($squaredNumbers);

function applyCallback($callback, $value)
{
  return $callback($value);
};

$double = function ($number) {
  return $number * 2;
};

$result = applyCallback($double, 5);

echo $result;
?>

<!-- Arrow Functions -->
<?php

// Syntax a little different from JS and meant to be one-liners:
$add = fn($a, $b) => $a + $b;

echo $add(1, 2);

$numbers = [1, 2, 3, 4, 5];
$squaredNumbers = array_map(fn($number) => $number * $number, $numbers);
?>