<?php  
require 'C:\Users\user\OneDrive\Desktop\includes\common.php';
$email = mysqli_real_escape_string($con, $_POST["$email"]);
$password =mysqli_real_escape_string($con,$_POST["$password"]);
   $hashed_password = MD5($password);
$user_registration_query ="select * from user where email = '$email' and  password =  '$hashed_password' ";
$query_result = mysqli_query($conn,$query);
if(mysqli_num_rows($query_result)==0){
echo " user account doesnot exists.";
    }
else{
$row = mysqli_fetch_array($query_result);
     $_SESSION['email_id'] =$email;
$_SESSION["id"] = $row["id"];
    header("location:products.php");  
}

