<!-- The Classic Fizzbuzz Challenge...in PHP! -->
<!-- 
1. Write a program that prints the numbers from 1 to 100.
2. For multiples of 3, print 'Fizz' instead of the number.
3. For the multiples of 5, print 'Buzz'.
4. For numbers which are multiples of both 3 and 5, print 'FizzBuzz'.
-->

<?php
$i = 0;
while ($i <= 100) {
  if ($i % 3 === 0 && $i % 5 === 0) {
    echo "FizzBuzz <br>";
  } elseif ($i % 3 === 0) {
    echo "Fizz <br>";
  } elseif ($i % 5 === 0) {
    echo "Buzz <br>";
  } else {
    echo $i . "<br>";
  }
  $i++;
}

?>