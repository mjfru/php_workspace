<?php
// PDO is an object we want to instantiate:
$host = 'localhost';
// Default for SQL
$port = '3306';
$dbName = 'blog';
$username = 'root';
$password = "root";

$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";

try {
  // Create instance
  $pdo = new PDO($dsn, $username, $password);

  // Set PDO to throw exceptions on error:
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo 'Database Connected';
  // Fetch as an associative array for easier access:
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo 'Connection Failed: ' . $e->getMessage();
};
