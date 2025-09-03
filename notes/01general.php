<!-- All PHP code begins and ends with <?php ?> -->
<?php
echo "Hello from PHP!";
// Echo is similar to console.log in JS or print() in Python.
// < ?= ? > (with no spaces) is also a shortcut to insert PHP code into an HTML document.
echo '<br />';
//? Print is far less common than echo and print only allows a single value, echo can have as many as you want seperated by a comma.
print 'Hello from the Print Statement.';
?>

<h1><?= 'Header!' ?></h1>

<!-- php file.php -->
<!-- php -S localhost:8000 / filename.php -->