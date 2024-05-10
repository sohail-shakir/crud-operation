<?php
$insert = false;
if(isset($_POST['name'])){
    
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    else{
    // echo "Success connecting to the db";
    }
    // Collect post variables

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $worktype= $_POST['worktype'];
    $address= $_POST['address'];
    
    // echo $name." ".$age." ".$gender." ".$city." ".$email." ".$phone." ".$password." ".$worktype." ".$address;
    // die();

    // if($fname !="" && $age !=""  && $gender !=""  && $city !=""  && $email!=""  && $phone !=""  && $password !=""  && $worktype !=""  && $address !="" ){

   

    $sql = "INSERT INTO emp.emp (name, age, gender, city, email, phone, password, worktype, address) 
    VALUES ('$name', '$age', '$gender', '$city' ,'$email', '$phone', '$password', '$worktype', '$address');";
    // echo $sql;
    // die();

    // Execute the query
    if($con->query($sql) == true){
        echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
// }
// else{
    // echo "can not empty";
// }

    // Close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
    <div class="container">
        <h1 class="title">
            Student  Record Form
        </h1>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form.</p>";
        }
    ?>
        <form action="againcheck.php" method="post">
        <div class="input-row">
                <div class="input-field">
                    <label for="fname">Student Name</label>
                    <input type="text" name="name" class="input" id="fname" required>
                </div>
                <div class="input-field">
                    <label for="age">AGE</label>
                    <input type="text" name="age" class="input" id="age" required>
                </div>
            </div>
            <div class="input-row">
                <div class="input-field">
                    <label for="email">Gender</label>
                    <input type="text" name="gender" class="input" id="email" required>
                </div>
                <div class="input-field">
                    <label for="gender">CITY</label>
                    <input type="text" name="city" class="input" id="gender" required>
                    
                </div>
            </div>
            <div class="input-row">
                <div class="input-field">
                    <label for="email">EMAIL</label>
                    <input type="email" name="email" class="input" id="email" required>
                </div>
                <div class="input-field">
                    <label for="phone">PHONE</label>
                    <input type="number" name="phone" class="input" id="phone" required>
                </div>
            </div>
            <div class="input-row">
                <div class="input-field">
                    <label for="password">PASSWORD</label>
                    <input type="password" name="password" class="input" id="password" required>
                </div>
                <div class="input-field">
                    <label for="work">Deparment</label>
                    <input type="text" name="worktype" class="input" id="work" required>
                </div>

                
            </div>
            
            <div class="input-row">
                <div class="input-field">
                    <label for="address"class="address">Address</label>
                    <input type="text" name="address" class="input" id="work" required>
                </div>
            </div>
            <div class="terms">
        
      </div>

             
    
             <div class="input-field" id="button">

             
            <button class="btn">Submit</button> 
          
              
           
    </div>
           
    </form>
    </div>
    <script src="index.js"></script>
    <style>
        button{
            width:44vw !important;
            background-color:black !important;
    border:1px solid #fff !important;
    height: 8vh;
    color: #fff;
    width: 9vw;
    margin:auto;
        }
        .address{
            width:100% !important;
            margin:auto;
        }
    </style>
    
</body>
</html>