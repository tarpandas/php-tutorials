<?php
/*
Connecting to phpmyadmin (Windows):
http://localhost/phpmyadmin

Then select 'Database; from top and create a database.
That will follow with creating table and columns.
We save after creating columns.

*/

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'php_dev');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if($conn->connect_error) {
    die('Connection Failed'. $conn->connect_error);
}

echo 'Connected!';
?>