//! Loops in PHP

//* For Loops
//? for(initialization; condition; update) {
//? Code to be executed here
//? }

<?php
// for($i = 0; $i < 10; $i++ ) {
//   echo $i . '<br />';
// }
?>


//* While
//? initialization; (before the while loop)
//? while (condition) {
//? Code to be executed here;
//? }

<?php
// $i = 0;
// while ($i < 10) {
//   echo $i . '<br/>';
//   $i++;
// }
?>

//* Do While
//? initialization;
//? do {
//? Code to be executed here;
//? Update;
//? } while (condition);
<?php
// $i = 10;
// do {
//   echo $i;
//   $i--;
// } while ($i > 0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP Loops</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP Basic Loops</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">

    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- For Loop Output -->
      <ul>
        <?php for ($i = 0; $i <= 5; $i++): ?>
          <li>(For Loop) Number: <?= $i ?></li>
        <?php endfor; ?>
      </ul>
    </div>

    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- While Output -->
      <ul>
        <?php $i = 0;
        while ($i <= 5): ?>
          <li>(While Loop) Number: <?= $i ?></li>
        <?php $i++;
        endwhile; ?>
      </ul>
    </div>

    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Do While Output -->
      <ul>
        <?php $i = 5;
        do { ?>
          <li>(Do While Loop) Number: <?= $i ?></li>
        <?php $i--;
        } while ($i > 0) ?>
      </ul>
    </div>
  </div>
</body>

</html>