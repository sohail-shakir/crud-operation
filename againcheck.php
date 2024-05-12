<?php
include 'connection.php';
?>
<?php
$insert = false;
if(isset($_POST['name'])){
    
 
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

        $sql = "INSERT INTO emp(name, age, gender, city, email, phone, password, worktype, address) 
        VALUES ('$name', '$age', '$gender', '$city' ,'$email', '$phone', '$password', '$worktype', '$address');";

    // $sql = "INSERT INTO emp.emp (name, age, gender, city, email, phone, password, worktype, address) 
    // VALUES ('$name', '$age', '$gender', '$city' ,'$email', '$phone', '$password', '$worktype', '$address');";
    // echo $sql;
    // die();

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted"; 

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
    <title>Student Record Management</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
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
            width:45.7vw !important;
            margin:auto;
        }
        .error{
        
         color: red ;
         font-size:10px;
         
        
     }
     .container{
        height:85vh;
     }
        
    </style>
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
                    <input type="text" name="name" class="input" id="fname">
                    <div id="nameerror" class="error"></div>
                </div>
                <div class="input-field">
              
                    <label for="age">AGE</label>
                    <input type="text" name="age" class="input" id="age">
                    <div id="ageerror" class="error"></div>
                </div>
            </div>
            <div class="input-row">
                <div class="input-field">
                   
                    <label for="gender">Gender</label>
                    <input type="text" name="gender" class="input" id="gender">
                    <div id="gendererror" class="error"></div>
                    
                </div>
                <div class="input-field">
                    <label for="city">CITY</label>
                    <input type="text" name="city" class="input" id="city">
                    <div id="cityerror" class="error"></div>
                    
                </div>
            </div>
            <div class="input-row">
                <div class="input-field">
                    <label for="email">EMAIL</label>
                    <input type="email" name="email" class="input" id="email">
                    <div id="emailerror" class="error"></div>
                </div>
                <div class="input-field">
                    <label for="phone">PHONE</label>
                    <input type="number" name="phone" class="input" id="phone">
                    <div id="phoneerror" class="error"></div>
                </div>
            </div>
            <div class="input-row">
                <div class="input-field">
                    <label for="password">PASSWORD</label>
                    <input type="password" name="password" class="input" id="password">
                    <div id="passworderror" class="error"></div>
                </div>
                <div class="input-field">
                    <label for="work">Deparment</label>
                    <input type="text" name="worktype" class="input" id="work">
                    <div id="workerror" class="error"></div>
                </div>

                
            </div>
            
            <div class="input-row">
                <div class="input-field">
                    <label for="address"class="address">Address</label>
                    <input type="text" name="address" class="input" id="address">
                    <div id="addresserror" class="error"></div>
                </div>
            </div>
            <div class="terms">
        
      </div>

             
    
             <div class="input-field" id="button">

             
            <button class="btn" onclick=" return validateForm()">Submit</button> 
          
              
           
    </div>
           
    </form>
    </div>
    <script src="script.js"></script>
   
    
</body>
</html>