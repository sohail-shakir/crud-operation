<?php
include 'connection.php';
?>
<?php


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
        header("Location: index.php"); // Redirect to index.php after successful update
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>
