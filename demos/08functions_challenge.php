<?php
/*
  Challenge 1 (Easy): Fahrenheit to Celsius
  Create a function called `fahrenheitToCelsius` that takes a Fahrenheit temperature as an argument. Return the temperature converted to Celsius.
  - Print to the screen like "68F = 20C. You can use the &deg; entity for the degrees symbol.

  The formula to convert Fahrenheit to Celsius is: Celsius = (Fahrenheit - 32) * 5/9

  Challenge 1 (Hard): Fahrenheit to Celsius
  - Create a variable in the global scope to hold the base temp of 32.
  - Create an anonymous function/closure that takes in a temp to convert and uses that base variable from the outer scope to calculate it to celsius.
  - Print to the screen like "68F = 20C. You can use the &deg; entity for the degrees symbol.
*/

echo "<h2>Challenge #1</h2>";

function fahrenheitToCelsius($ftemp)
{
  $ctemp = ($ftemp - 32) * 5 / 9;
  return $ftemp . "&deg;F = " . round($ctemp) . "&deg;C";
}

echo fahrenheitToCelsius(58);

echo '<br>';

$newFahrenheitToCelsius = fn($ftemp) => $ftemp . "&deg;F = " . round(($ftemp - 32) * 5 / 9) . "&deg;C";

echo $newFahrenheitToCelsius(60);
echo '<br>';


$baseTemp = 32;
$getCelsiusTemp = function ($ftemp) use (&$baseTemp) {
  $ctemp = ($ftemp - $baseTemp) * 5 / 9;
  return $ftemp . "&deg;F = " . round($ctemp) . "&deg;C";
};

echo $getCelsiusTemp(70);

/*
  Challenge 2: Print names in uppercase
  Create a function called `printNamesToUpperCase` that takes an array of names as an argument. The function should loop through the array and print each name to the screen in uppercase letters.
*/
echo "<h2>Challenge #2</h2>";

$names = ["Austin", "Jim", "Scott", "Matt"];

function printNamesToUpperCase($arr)
{
  foreach ($arr as $name) {
    $uppercaseName = strtoupper($name);
    echo $uppercaseName . '<br>';
  }
}

printNamesToUpperCase($names);

echo '<br>';

/*
  Challenge 3: Find the longest word
  1. Create a function called `findLongestWord` that takes a sentence as an argument.
  2. The function should return the longest word in the sentence.
  
  Hint
- You will need to use the `explode` function to split the sentence into an array of words.
- You will need to use the `strlen` function to find the length of each word.
- You will need to use a loop to loop through the array of words.
- You will need to use a conditional to check if the current word is longer than the longest word you have found so far.

*/
echo "<h2>Challenge #3</h2>";

function findLongestWord($sentence) {
  $sentenceArray = explode(" ", $sentence);
  // print_r($sentenceArray);
  $longestLength = 0;
  $longestWord = "";
  foreach($sentenceArray as $word) {
    if (strlen($word) > $longestLength) {
      $longestWord = $word;
    }
  }
  echo "'$longestWord'" . " is the longest word in the sentence.";
}

findLongestWord("I could not wait to finish");
echo '<br>';
findLongestWord("This is possibly the longest sentence I can think of under this kind of pressure");
