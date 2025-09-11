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


//! String Functions
<?php 
$string_output = null;
$string = 'Hello, World!';

// strlen
$string_output = strlen($string);

// str_word_count
$string_output = str_word_count($string);

// strpos
$string_output = strpos($string, 'World');

// Get specific character by index:
$string_output = $string[4];

// substr
$string_output = substr($string, 7, 5);

// str_replace
$string_output = str_replace('World', 'Earth', $string);

//strtolower
$string_output = strtolower($string);

// strtoupper
$string_output = strtoupper($string);

// ucwords
$string_output = ucwords($string);

$string_output = trim('  Hello, World!  ')

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
        Numerical Outputs:
        <?= $output ?>
      </p>

    </div>
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <p class="text-xl">
        String Outputs:
        <?= $string_output ?>
      </p>
    </div>
  </div>
</body>

</html>