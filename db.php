<?php
// Database connection file
$host = 'localhost'; // Change if needed
$db = 'dashboard_db';
$user = 'root'; // Change to your database username
$pass = ''; // Change to your database password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}
?>
