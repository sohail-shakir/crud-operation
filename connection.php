<?php
// Set connection variables
$server = "localhost";
$username = "root";
$password = "";
$database = "emp"; // Assuming your database name is emp

// Create a database connection
$con = mysqli_connect($server, $username, $password, $database);

// Check for connection success
if (!$con) {
    die("Connection to the database failed: " . mysqli_connect_error());
}
// else{
//     echo" connect successful";
// }