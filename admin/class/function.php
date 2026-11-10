<?php
// Database connection parameters
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "bts";

// Create a database connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check for connection errors
if (!$conn) {
    die("Not Connected"). mysqli_error($conn);
}


?>

