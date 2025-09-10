<?php
//! Arithmetic Operators
$output = null;

$num1 = 20;
$num2 = 10;

$output = "$num1 + $num2 = " . $num1 + $num2;
$output = "$num1 - $num2 = " . $num1 - $num2;
$output = "$num1 * $num2 = " . $num1 * $num2;
$output = "$num1 / $num2 = " . $num1 / $num2;
$output = "$num1 % $num2 = " . $num1 % $num2;

//* Assignment Operator
$num3 = 10;
// $num3 = $num3 + 20;
$num3 += 20;

$output = $num3; // 30

//! Functions (Built-in with PHP)
//! Random
$output = rand();
$output = getrandmax();
$output = rand(1, 10); // (min, max)

//! Rounding
$output = round(6.7);
$output = ceil(4.2);
$output = floor(5.9);

//! Other
$output = sqrt(4.9);
$output = pi();
$output = abs(-2.4);

//! Min / Max
$output = max(1, 2, 3, 50, 44);
$output = max([1, 2, 3, 25, 11]);
$output = min(1, 2, 3, 50, 44);
$output = min([1, 2, 3, 25, 11]);

//! Number Formatting
$output = number_format(1234567.191234, 2, '.', ',');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <p class="text-xl">
        <?= $output ?>
      </p>
    </div>
  </div>
</body>

</html>