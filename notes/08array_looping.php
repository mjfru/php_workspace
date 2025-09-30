<!-- Looping Through Arrays in PHP -->

<?php
$names = ["John Doe", "Jane Doe", "Manny Ortiz", "David Ramirez"];

$users = [
  ["name" => "John", "email" => "john@mail.com"],
  ["name" => "Jane", "email" => "jane@mail.com"],
  ["name" => "Manny", "email" => "manny@mail.com"],
  ["name" => "David", "email" => "david@mail.com"],
  ["name" => "Joe", "email" => "joe@mail.com"],
]
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
      <!-- Output -->
      <h3 class="text-xl font-semibold mb-4">Using a for loop</h3>
      <ul class="mb-6">
        <?php for ($i = 0; $i < count($names); $i++) : ?>
          <li><?= $names[$i]; ?></li>
        <?php endfor; ?>
      </ul>

      <h3 class="text-xl font-semibold mb-4">Using a foreach loop</h3>
      <ul class="mb-6">
        <?php foreach ($names as $name) : ?>
          <li><?= $name ?></li>
        <?php endforeach; ?>
      </ul>

      <h3 class="text-xl font-semibold mb-4">Using a foreach loop with index</h3>
      <ul class="mb-6">
        <?php foreach ($names as $index => $name) : ?>
          <li><?= $index . ": " . $name ?></li>
        <?php endforeach; ?>
      </ul>

      <h3 class="text-xl font-semibold mb-4">Using a foreach loop with associative array</h3>
      <ul class="mb-6">
        <?php foreach ($users as $user) : ?>
          <li><?= $user['name'] . ": " . $user['email'] ?>
          <?php endforeach ?>
      </ul>

      <h3 class="text-xl font-semibold mb-4">Getting key names and values from associative array</h3>
      <ul class="mb-6">
        <?php foreach ($users as $user) : ?>
          <?php foreach ($user as $key => $value) : ?>
            <li>
              <?= $key . ": " . $value; ?>
            </li>
          <?php endforeach ?>
        <?php endforeach ?>
      </ul>
    </div>
  </div>

  <hr />

  <?php
  $listings = [
    [
      'id' => 1,
      'title' => 'Software Engineer',
      'description' => 'We are seeking a skilled software engineer to develop high-quality software solutions.',
      'salary' => 80000,
      'location' => 'San Francisco',
      'tags' => ['Software Development', 'Java', 'Python']
    ],
    [
      'id' => 2,
      'title' => 'Marketing Specialist',
      'description' => 'We are looking for a marketing specialist to develop and implement effective marketing strategies.',
      'salary' => 60000,
      'location' => 'New York',
      'tags' => ['Digital Marketing', 'Social Media', 'SEO']
    ],
    [
      'id' => 3,
      'title' => 'Accountant',
      'description' => 'We are hiring an experienced accountant to handle financial transactions and ensure compliance.',
      'salary' => 55000,
      'location' => 'Chicago',
      'tags' => ['Accounting', 'Bookkeeping', 'Financial Reporting']
    ],
    [
      'id' => 4,
      'title' => 'UX Designer',
      'description' => 'We are seeking a talented UX designer to create intuitive and visually appealing user interfaces.',
      'salary' => 70000,
      'location' => 'Seattle',
      'tags' => ['User Experience', 'Wireframing', 'Prototyping']
    ],
    [
      'id' => 5,
      'title' => 'Customer Service Representative',
      'description' => 'We are looking for a friendly customer service representative to assist customers and resolve issues.',
      'salary' => 40000,
      'location' => 'New York',
      'tags' => ['Customer Support', 'Communication', 'Problem Solving']
    ],
  ];
  ?>

  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">Job Listings</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <!-- Output -->
    <?php foreach ($listings as $job) : ?>
      <div class="md my-4">
        <div class="bg-white rounded-lg shadow-md">
          <div class="p-4">
            <h2 class="text-xl font-semibold"><?= $job['title'] ?></h2>
            <p class="text-gray-700 text-lg mt-2"><?= $job['description'] ?></p>
            <ul class="mt-4">
              <li class="mb-2">
                <strong>Salary: </strong> $<?= $job['salary'] ?>
              </li>
              <li class="mb-2">
                <strong>Location:</strong> <?= $job['location'] ?>
              </li>
              <li class="mb-2">
                <strong>Tags:</strong> <?= implode(', ', $job['tags']) ?>
              </li>
            </ul>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>

</body>

</html>