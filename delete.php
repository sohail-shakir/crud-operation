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
$id=$_GET['id'];
$query="DELETE FROM emp WHERE id='$id' ";
$data=mysqli_query($con,$query);
if($data)
{
    echo "Record Deleted";
    ?>
    <meta http-equiv="refresh" content ="0; url =http://localhost/crud/crud/readdata.php" />
    <?php 



}
else{
    echo "Failed to Delete";
}


?>
