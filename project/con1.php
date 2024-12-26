<?php
$host = 'localhost';
$username = '';
$password = '';
$database = 'aidsdb';

try {
    $con = new mysqli($host, $username, $password, $database);
    // Rest of your code here
} catch (mysqli_sql_exception $e) {
    die('Connection failed: ' . $e->getMessage());
}
?>
