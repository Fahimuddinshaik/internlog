<?php
session_start();
$conn=mysqli_connect("localhost","root","","login_two");
if(isset($_POST["submit"])){
    $username=$_POST["username"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $location=$_POST["location"];
    $age=$_POST["age"];
    $university=$_POST["university"];
    $query="INSERT INTO login_ass VALUES('','$username','$phone','$email','$location','$age','$university')";
    mysqli_query($conn,$query);
    echo "<script> alert('Thank you for filling the form {$username} ');</script>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align:center">Thankyou for filling the form <?php echo $username ?></h1>    
    <?php
    
    }
    session_destroy();
    ?>
</body>
</html>