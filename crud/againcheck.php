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
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background: linear-gradient(to top, #2EB6FF, #1A73E8);
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .container {
        background: #fff;
        padding: 30px;
        border-radius: 20px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        width: 90%;
        max-width: 600px;
        height: 80vh;
      
        border: 1px solid #ccc;
        border-top: 3px solid #ccc;
        box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
       
    }
    .title {
        text-align: center;
        font-size: 24px;
        margin-bottom: 20px;
    }
    .input-row {
        display: flex;
        gap: 20px;
    }
    .input-field {
        flex: 1;
        margin-bottom: 20px;
    }
    .input-row .input-field:first-child {
        margin-right: 20px;
    }
    .input-field label {
        display: block;
        font-size: 14px;
        margin-bottom: 5px;
    }
    .input-field input,
    .input-field select,
    .input-field textarea {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid #ccc;
        transition: border-color 0.3s;
        box-sizing: border-box;
    }
    .input-field input:focus,
    .input-field select:focus,
    .input-field textarea:focus {
        border-color: #1A73E8;
        outline: none;
    }
    .input-field .btn {
        background-color: #1A73E8;
        background: black;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s;
        display: block;
        margin: 0 auto;
        width: 10vw;
        height: 8vh;
        margin-top:-14px;
        text-align:center;
    }
 
   
    .input-field .btn:hover {
        
        background: linear-gradient(135deg, #1A73E8, #2EB6FF);
        box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
    }
    .input-field.terms {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }
    .input-field.terms p {
        margin-left: 10px;
        font-size: 14px;
    }
    .input-field.terms .check {
        display: flex;
        align-items: center;
    }
    .input-field.terms .check input {
        margin-right: 10px;
    }
    .input-field.terms .checkmark {
        position: relative;
        display: inline-block;
        width: 20px;
        height: 20px;
        background-color: #ccc;
        border-radius: 3px;
    }
    .select{
        -webkit_appearance:none;
        appearance:none;
    }
    .input-field.terms .check input:checked ~ .checkmark {
        background-color: #1A73E8;
    }
    .input-field.terms .check input:checked ~ .checkmark:after {
        content: '';
        position: absolute;
        left: 7px;
        top: 3px;
        width: 3px;
        height: 8px;
        border: solid #fff;
        border-width: 0 2px 2px 0;
        transform: rotate(45deg);
    }
    textarea {
        width: 90%;
    }
    .terms {
    display: flex;
    align-items: center;
    margin-bottom:9px;
}

.check {
    margin-right: 10px;
}

.check input {
    display: none;
}

.checkmark {
    position: relative;
    display: inline-block;
    width: 20px;
    height: 20px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

.checkmark:after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 6px;
    height: 12px;
    border: solid #1A73E8;
    border-width: 0 2px 2px 0;
    display: none;
}

.check input:checked + .checkmark:after {
    display: block;
}

.terms p {
    margin: 3px;
}
@media only screen and (max-width: 600px) {

    .input-row {
        flex-direction: column;
    }
}
@media only screen and (max-width: 600px) {
    .container {
        height: 120vh; /* Increase height for mobile devices */
    }
    .input-row {
        
        flex-direction: column;
       
    }
    .input-field input,
    .input-field select,
    .input-field textarea {
        width: 85vw;
        padding: 10px;
        font-size: 10x;
        border-radius: 5px;
        border: 1px solid #ccc;
        transition: border-color 0.3s;
        box-sizing: border-box;
   
}
.input-row {
        display: flex;
        gap: 10px;
    }
}

.select-wrapper {
    position: relative;
    width: 100%;
}

.select {
    width: calc(100% - 20px); /* Adjust as needed */
    padding: 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid #ccc;
    appearance: none;
    -webkit-appearance: none;
    background-color: transparent;
    cursor: pointer;
}


.select-icon {
    position: absolute;
    top: 50%;
    right: 10px; /* Adjust as needed */
    transform: translateY(-50%);
    pointer-events: none;
    font-size: 14px; /* Adjust as needed */
    color: #2EB6FF; /* Change the color to the desired value */
}





</style>
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
                    <label for="address">Address</label>
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
    
</body>
</html>