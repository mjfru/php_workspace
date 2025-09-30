<!-- Loops & Arrays Challenge -->

<?php
/*
  Challenge 1: Create a multiplication table using a nested `for` loop. The table should look like this:

1 x 1 = 1
1 x 2 = 2
1 x 3 = 3
1 x 4 = 4
1 x 5 = 5
1 x 6 = 6
1 x 7 = 7
1 x 8 = 8
1 x 9 = 9
1 x 10 = 10
2 x 1 = 2
2 x 2 = 4
2 x 3 = 6
2 x 4 = 8
... 
10 x 10 = 100
*/
echo '<h3>Multiplication Table</h3>';

for ($i = 1; $i <= 10; $i++) {
  for ($j = 1; $j <= 10; $j++) {
    echo $i . ' x ' . $j . ' = ' . $i * $j . '<br>';
  }
}

/*
  Challenge 2: Get the sum of the numbers in an array by using a foreach loop. For bonus points, also use a for loop.
*/

echo '<h3>Array Sum</h3>';

$numbers = [1, 2, 3, 4, 5];
$total = 0;
foreach ($numbers as $number) {
  $total += $number;
}

echo $total;
echo '<br>';

$sum = 0;
for ($i = 0; $i < count($numbers); $i++) {
  $sum  += $numbers[$i];
}

echo $sum;

/*
  Challenge 3: Calculate the average students grade from an array of students. Each student has their own array with the key 'grades'. 

  1. Create an array of students with their names and grades (0 - 100)
	2. Iterate over the students array with a foreach loop
	3. Calculate the average grade for each student
*/

echo '<h3>Average Grade</h3>';

$gradebook = [
  ["name" => "Austin", "grades" => [98, 94, 100, 88]],
  ["name" => "Kelsey", "grades" => [100, 91, 89, 99]],
  ["name" => "James", "grades" => [99, 90, 80, 95]],
  ["name" => "McKenna", "grades" => [77, 90, 92, 75]],
  ["name" => "Scott", "grades" => [90, 100, 100, 90]],
];

foreach ($gradebook as $student) {
  $name = $student['name'];
  $grades = $student['grades'];
  $average = array_sum($grades) / count($grades);
  echo "{$name}: Average Grade = {$average} <br>";
}
