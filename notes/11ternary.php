<!-- 
Ternary Operators in PHP:

Syntax: 
The Condition to Check ? the value or expression to return if true : the value or expression to return if false

Condition ? Expression : Expression
-->

<?php
$score = 50;

if ($score > 40) {
  echo 'High Score';
} else {
  echo 'Normal Score';
}

// Using a ternary instead:
echo $score > 40 ? 'High Score' : 'Normal Score';
// This can also be stored in a variable.
?>

<!-- 
Null(ish) Coalescing Operator
-->

<?php
$favoriteColor = 'green';
// $color = isset($favoriteColor) ? $favoriteColor : 'blue';

//? If what's on the left ($favoriteColor) is null, it will return what's on the right (blue) 
$color = $favoriteColor ?? 'blue';
// If there's a favoriteColor, that's what color holds. If not, it's blue.
?>