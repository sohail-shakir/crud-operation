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

// Execute SELECT query to fetch data from the table
$sql = "SELECT * FROM emp";
$result = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Data</title>
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
     h2{
        text-align:center;
        position: absolute;
        left:40%

    }
        table thead {
            margin-top:15px;
            padding-top:20px;
            width: 100%;
            border-collapse: collapse;
            background-color:#fff;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            
        }
        .insert-button {
            margin-bottom: 20px;
        }
        button{
            background-color:black !important;
            border:1px solid #fff !important;
        }
        button a{
            color:#fff ;
            text-decoration:none;
            

        }
    
 
   
       button:hover {
        
        background: linear-gradient(135deg, #1A73E8, #2EB6FF);
        box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
        /* border:10px solid #fff !important; */
    }
    button a:hover {
        
        color:#fff;
    }
    i{
        color: black;
        margin: 5px;
    }
    .deli{
        color:red;

    }
    
    
   
    
    </style>
    <script>
        function ConfirmDel(id){
            var cnfrm = confirm("Are You Sure? You want to delete?");
            if(cnfrm){
                window.location.href = "delete.php?id="+id;
            }
        }
    </script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Adjust container height based on content
        window.addEventListener('DOMContentLoaded', function() {
            var container = document.getElementById('data-container');
            var contentHeight = container.scrollHeight;
            container.style.height = contentHeight + 'px';
        });
    </script>
</head>
<body>
    <div class="container" id="data-container">
        <div class="row">

        <div class="col-10">

       
        <h2 class="h2-heading">Student Database</h2>
        </div>
        <div class="col-2">
        <button type="button" class="btn btn-primary"><a href="againcheck.php" class="insert-button" target="_blank">Insert Data</a></button>
        </div>

        <table class="table">
              <thead>
                    <tr>
                    <th scope="col">ID</th>  
                    <th scope="col">Student Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Gender</th>
                    <th scope="col">City</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Department</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php
                // Loop through each row of the result set
                while ($row = mysqli_fetch_assoc($result)) {
                    $row_id = $row['id'];
                    echo "<tr>";
                    echo "<td>{$row['id']}</td>";
                    echo "<td>{$row['name']}</td>";
                    echo "<td>{$row['age']}</td>";
                    echo "<td>{$row['gender']}</td>";
                    echo "<td>{$row['city']}</td>";
                    echo "<td>{$row['email']}</td>";
                    echo "<td>{$row['phone']}</td>";
                    echo "<td>{$row['worktype']}</td>";
                    echo "<td>{$row['address']}</td>";
                    // echo "<td><a href=''><i class='fa fa-edit'></i></a><a href='#'><i class='fa fa-trash deli'></i></a></td>";
                    echo "<td><a href='update.php?id={$row_id}'><i class='fa fa-edit'></i></a> 
                    <a onclick='ConfirmDel($row_id);'><i class='fa fa-trash deli'></i></a></td>";

              
                   

                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
// Close the database connection
mysqli_close($con);
?>
