<!-- Comparisons and Logical Operators in PHP -->
<?php

//? Only new operators or unique PHP operators are shown. 

$x = 10;
$y = '10';

var_dump($x <> $y); // False, another way to write 'not equal to'

var_dump($x == 10 xor $y == 20); // Exclusive or, if only ONE is true

?>

<!-- Conditionals in Loops -->

<?php

// $number = 1;
// while ($number <= 10) {
//   if ($number % 2 == 0) {
//     echo $number . ' is even. <br>';
//   } else {
//     echo $number . ' is odd. <br>';
//   }
//   $number++;
// }

// Break out of a loop:
for ($i = 0; $i <= 10; $i++) {
  if ($i == 5) {
    break;
  }
  echo $i . '<br>';
}

// Skip an iteration and continue
for ($i = 0; $i <= 10; $i++) {
  if ($i == 5) {
    continue;
  }
  echo $i . '<br>';
}

$studentGrades = array(
  'John' => 75,
  'Jack' => 92,
  'Jill' => 100,
  'Joan' => 80
);

foreach ($studentGrades as $name => $grade) {
  if ($grade >= 90) {
    echo $name . ' has an excellent grade. <br>';
  }
}

?>