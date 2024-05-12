<?php
include 'connection.php';
?>

<?php 

$id=$_GET['id'];
$query="DELETE FROM emp WHERE id='$id' ";
$data=mysqli_query($con,$query);
if($data)
{
    header("Location: index.php"); // Redirect to index.php after successful update
    exit();
}
else{
    echo "Failed to Delete";
}


?>
