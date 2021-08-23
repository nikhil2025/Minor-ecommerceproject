<?php
 $conn = mysqli_connect("localhost","root","","store") or die(mysqli_error($conn));
if(!isset($_SEESSION)){
session_start();
}
?>