<?php
$dayOfWeek = date('l');
// echo $dayOfWeek;

switch ($dayOfWeek) {
  case 'Monday':
    $message = 'Monday Blues!';
    $color = 'blue';
    break;
  case 'Tuesday':
    $message = 'Taco Tuesday!';
    $color = 'orange';
    break;
  case 'Wednesday':
    $message = 'Hump Day!';
    $color = 'navy';
    break;
  case 'Thursday':
    $message = 'One more day until Friday!';
    $color = 'green';
    break;
  case 'Friday':
    $message = 'TGIF!';
    $color = 'purple';
    break;
  case 'Saturday':
    $message = 'Weekend!';
    $color = 'teal';
    break;
  case 'Sunday':
    $message = 'Weekend!';
    $color = 'orangered';
    break;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>What Day Is It?</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: <?= $color ?>;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
  </style>
</head>

<body>
  <h1><?= strtoupper($message) ?></h1>
</body>

</html>