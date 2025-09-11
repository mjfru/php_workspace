<?php 
//! Dates & Times in PHP
/*
- Y - The year
- m - The month
- d - The day
- D - the day the week (short)
- l - the full day of the week name
- h - The hour
- i - The minute
- s - The second
- a - AM/PM
*/

// Get year
$output = date('Y');

// Get year w/ timestamps (Time passed since 1970, the 'Epoch')
$output = date('Y', 936345600);

// Get timestamp from strtotime
$output = date('Y', strtotime('1999-09-01'));

// Get month
$output = date('m');

// Get day
$output = date('l');

// Get all:
$output = date('Y-m-d');

// Get hour
$time = date('h');

// Get minute
$time = date('i');

// Get second
$time = date('s');

// Get AM/PM
$time = date('a');

// All together:
$time_date = date('Y-m-d h:i:s a');

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
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <p class="text-xl">
        <?= $time ?>
      </p>
    </div>
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <p class="text-xl">
        <?= $time_date ?>
      </p>
    </div>
  </div>
</body>

</html>