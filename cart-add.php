<?php
require 'C:\Users\user\OneDrive\Desktop\includes\common.php';
$item_id  = $_GET["id"];
$user_id = $_SESSION["id"];
$query = "INSERT INTO users_items(user_id,item_id,status) VALUES('$user_id','$item_id','Added to cart')";
$query_result = mysli_query($conn,$query);
header("location:products.php);
?>