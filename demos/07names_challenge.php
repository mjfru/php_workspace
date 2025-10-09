<!-- 
1. Take the array of names below and loop through them.
2. Within the loop, use a conditional statement to check if the first letter of the name is 'A'.
3. If the first letter is 'A', skip that name and continue to the next iteration.
4. If the first letter is not 'A', reverse the string.
5. Make all names lowercase before printing them.
-->

<?php

$names = ['Alex', 'Beth', 'Caroline', 'Dave', 'Elenor', 'Anna', 'Freddie', 'Adam'];

foreach ($names as $name) {
  if ($name[0] === 'A') {
    continue;
  } else {
    $reverseLowerName = strtolower(strrev($name));
    echo $reverseLowerName . "<br>";
  }
}
