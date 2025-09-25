<?php
//! Challenge 1: Sum of an array
//? Create an array of numbers. 
//? Get the sum or all numbers combined and put it into a variable.
//? Then print out 'The sum of the {amount} numbers is: {sum} '. 
//? For example, if the array is [1, 2, 3, 4, 5], the output should be `The sum of the 5 numbers is: 15`.

$numbers = [1, 3, 5, 7, 9];
$amount = count($numbers);
$sum = array_sum($numbers);

//! Challenge 2: Colors array

$colors = ['red', 'blue', 'green', 'yellow'];
//? Reverse the $colors array.
$colors = array_reverse($colors);
//? Add 'purple' and 'orange' to the end of the array.
array_push($colors, "purple", "orange");
//? Replace the second color with 'pink'.
$colors[1] = "pink";
//? Remove the last element of the array
array_pop($colors);


//! Challenge 3: Jobs listing
//? Create a multi-dimensional array of associative arrays of 3 jobs listings with the fields id, job_title, company, contact_email, and contact_phone.
//? Add an array field for skills; it should be an array of strings with each skill a person has.
$jobs = [
  [
    "id" => 1,
    "job_title" => "Developer",
    "company" => "Microsoft",
    "contact_email" => "jobs@ms.com",
    "contact_phone" => "111-222-3333",
    "skills" => ["PHP", "JS", "Python"]
  ],
  [
    "id" => 2,
    "job_title" => "Web Developer",
    "company" => "Discord",
    "contact_email" => "jobs@discord.com",
    "contact_phone" => "444-222-3333",
    "skills" => ["PHP", "JS", "WordPress"]
  ],
  [
    "id" => 3,
    "job_title" => "Frontend Developer",
    "company" => "Apple",
    "contact_email" =>
    "jobs@apple.com",
    "contact_phone" => "555-222-3333",
    "skills" => ["React", "JS", "HTML", "CSS"]
  ],
];

//? Create a new listing using array_push(), it should have the same fields as they others.
array_push($jobs, [
  "id" => 3,
  "job_title" => "Backend Developer",
  "company" => "Udemy",
  "contact_email" => "jobs@apple.com",
  "contact_phone" => "555-777-3333",
  "skills" => ["Python", "Rust", "MySQL"]
]);

//? Print out the job_title of the second job listing in the array.
$job_title = $jobs[1]["job_title"];

//? Print out the first skill of the third job listing in the array.
$skill = $jobs[2]["skills"][0];

?>
<h1>Array Challenges</h1>
<h2>Sum of an Array</h2>
<p><?= 'The sum of the ' . $amount . " numbers is: " . $sum . "." ?></p>

<h2>Colors Challenge</h2>
<p><?= print_r($colors) ?></p>

<h2>Jobs Listing Challenge</h2>
<p><?= print_r($jobs) ?></p>
<p><?= 'The job title of the second job listing is: ' . $job_title . "." ?></p>
<p><?= "The first skill of the third job listing is: " . $skill . "." ?></p>