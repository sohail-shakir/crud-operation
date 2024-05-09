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

// Check if form is submitted for update
if(isset($_POST['update'])) {
    // Retrieve form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $worktype = $_POST['worktype'];
    $address = $_POST['address'];

    // Update record in the database
    $sql = "UPDATE emp SET name='$name', age='$age', gender='$gender', city='$city', email='$email', phone='$phone', worktype='$worktype', address='$address' WHERE id='$id'";
    
    if(mysqli_query($con, $sql)) {
        header("Location: readdata.php"); // Redirect to readdata.php after successful update
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>
