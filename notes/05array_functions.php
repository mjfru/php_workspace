<?php
//! Array Functions in PHP

$output = null;
$ids = [10, 22, 15, 45, 67];
$users = ["user1", "user4", "user3"];

//* count() - returns the number of items in an array:
$output = count($ids); // 5

//* sort() - manipulates arrays in order:
sort($ids);
sort($users);

//* rsort - reverse sort:
rsort($ids);
rsort($users);

//* array_push(array, new_element) - adds an element to the end of an array:
array_push($ids, 100);
array_push($users, "user2");

//* array_pop(array) - removes the last element from an array
array_pop($ids);
array_pop($users);

//* array_shift(array) - removes the first element from an array
array_shift($ids);
array_shift($users);

//* array_unshift(array, new_element) - adds an element to the beginning of an array
array_unshift($ids, 100);
array_unshift($users, 'user2');

//* array_slice(array, index_start, length_from_start) - returns part of an array as a new array
$ids2 = array_slice($ids, 2, 3);
// var_dump($ids2);

//* array_splice(array, index_start, length_from_start, replacement value) - returns a portion of the array and replaces it with something else:
// array_splice($ids, 1, 1, 'New ID');
array_splice($users, 0, 1, 'New User');

//* array_sum() - similar to .reduce() in JS:
$output = 'Sum of IDs: ' . array_sum($ids);

//* array_search(search_param, array_to_search) - searches an array for a particular value:
$output = 'User 3 is at index: ' . array_search('user3', $users);

// * in_array() - returns a truthy/falsey value if a value is in an array:
array_push($users, 'user2');
$output = 'User 2 Exists: ' . in_array('user2', $users); // 1 - Truthy value

//* explode(how_we_want_to_split, string_value) - turns a string into an array:
$tags = 'tech,code,programming';
$tagsArray = explode(',', $tags);
var_dump($tagsArray);

//* implode(how_we_want_to_seperate, array) - turns an array into a string
$output = implode(', ', $users);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP Array Functions</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP Array Functions</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">

    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <p class="text-xl">
        Output:
        <?= $output ?>
      </p>
      <h2 class="text-xl font-semibold my-4">
        IDs Array:
      </h2>
      <p>
      <pre>
          <?php print_r($ids); ?>
        </pre>
      </p>
      <h2 class="text-xl font-semibold my-4">
        Users Array:
      </h2>
      <p>
      <pre>
          <?php print_r($users); ?>
        </pre>
      </p>
    </div>
  </div>
</body>

</html>