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