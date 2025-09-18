
<?php
//! PHP Arrays
/*
* Pure review, but arrays in PHP are versatile, ordered collections, where mixed data types are allowed, each item is easily accessible, and is useful for grouping.

! There are two ways to create arrays in PHP:
? With the array method:
$names = array("Matt", "Kelsey");

? Or as you'd expect:
$names = ["Matt", "Kelsey"];

? To access values, it's also as you'd expect:
echo $names[1]; -- Kelsey
*/ 

$names = array('Matt', 'Kelsey');
$numbers = [7, 4];

// To display arrays to yourself on your browser:
function inspect($value)
{
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
}

inspect($names);
inspect($numbers);

// print_r() is also another method of going about this.

//* To get a single value, we can use echo.
// echo $names[0]; // Matt

//* Adding elements to an array:
//? Low-level, specify the index you want to add something to:
$numbers[2] = 101;
// inspect($numbers);

//? Or, leave it blank and it'll be pushed to the end
$numbers[] = 77;

//? Overwriting is also simple:
$numbers[1] = 11;

//? To remove the element (and its index!!):
unset($numbers[0]);

//? To do this without messing up the index, use the array_values method:
$numbers = array_values($numbers);
inspect($numbers);
?>