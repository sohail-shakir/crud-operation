<?php
include 'connection.php';
?>
<?php


// Check if ID parameter is present in the URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch record from the database based on the ID
    $sql = "SELECT * FROM emp WHERE id=$id";
    $result = mysqli_query($con, $sql);

    // Check if record exists
    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "No record found with the given ID";
        exit();
    }
} else {
    echo "ID parameter is missing in the URL.";
    exit();
}

mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
    <link rel="stylesheet" href="style.css"> <!-- Link to your CSS file -->
    
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
</head>
<body>

 
  

   

    <div class="container">
        <h1 class="title">
            Student  Record Update
        </h1>
        <form method="post" action="update_process.php">

    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <div class="input-row">
    <div class="input-field">
    <label for="name">Name:</label>
    <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
    </div>
    <div class="input-field">
    <label for="age">Age:</label>
    <input type="text" name="age" value="<?php echo $row['age']; ?>"><br><br>
    </div>
    </div>
    <div class="input-row">
    <div class="input-field">
    <label for="gender">Gender:</label>
    <input type="text" name="gender" value="<?php echo $row['gender']; ?>"><br><br>
    </div>
    <div class="input-field">
    <label for="city">City:</label>
    <input type="text" name="city" value="<?php echo $row['city']; ?>"><br><br>
    </div>
    </div>
    <div class="input-row">
    <div class="input-field">
    <label for="email">Email:</label>
    <input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
    </div>
    <div class="input-field">
    <label for="phone">Phone:</label>
    <input type="number" name="phone" value="<?php echo $row['phone']; ?>"><br><br>
    </div>
    </div>
    <div class="input-row">
    <div class="input-field">
    <label for="worktype">Department:</label>
    <input type="text" name="worktype" value="<?php echo $row['worktype']; ?>"><br><br>
    </div>
    <div class="input-field">
    <label for="address">Address:</label>
    <input type="text" name="address" value="<?php echo $row['address']; ?>"><br><br>
    </div>
    </div>
    <div class="input-field">
    <input type="submit" name="update" class="button" value="Update Record">
    </div>
    </form>
      
        
    </div>

    <script src="script.js"></script>

</body>
</html>
