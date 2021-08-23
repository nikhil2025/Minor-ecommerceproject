<?php
if(isset($_SESSION["id"])){
header("location:products.php");
}
require "./includes/commom.php";
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>LIFESTYLE STORE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel ="stylesheet" href="signup.css" type = "text/css">
        <link rel ="stylesheet" href ="bootstrap/css/bootstrap.min.css" type = "text/css">
        <script type = "text/javascript" src ="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script  type ="text/javascript" src ="bootstrap/js/bootstrap.min.js"></script>
        
    </head>
    <body>
<?php 
require "./includes/header.php";
?>
        <div class ="container">
    <div class ="mycard">
            <div class ="row">
                <div class ="col-md-6">
                    <div class =" myleftctn ">
                    <form class= "myform text-center">
                        <header>Create new account</header>
                        <div class ="form-group">
                            <i class ="fas fa-user"></i>
                            <span class ="glyphicon glyphicon-user"></span>
                            <input class =" myinput" type ="text" placeholder ="username" id = "username"  name ="name" required >
                            <div class ="invalid-feedback">please fill out this field.</div>
                        </div>
                        <div class ="form-group">
                           <i class ="fas fa-envelope"></i>
                           <span class ="glyphicon glyphicon-envelope"></span>
                           <input class =" myinput" type ="text" placeholder ="email" id = "email" name = "email" required >
                            <div class ="invalid-feedback">please fill out this field.</div>
                        </div>
                        <div class ="form-group">
                           <i class ="fas fa-lock"></i>
                           <span class ="glyphicon glyphicon-lock"></span>
                           <input class =" myinput" type ="password" placeholder ="password" id = "password" name ="password" required >
                           <div class ="invalid-feedback">please fill out this field.</div></div>
                            <div class ="form-group">
                                <label><input  id="check_1" name ="check_1" type = "checkbox" required ><small> I read and agree to the terms
                                        and conditions </small>
                                    
                                </label>
                            </div>
                            <input type ="submit" class ="butt" value ="CREATE ACCOUNT">
                            </form>
                        </div>
    <div class ="panel-footer">
Already have an account ?Click<a href = "login.html">here</a>to create one.
</div>
                </div>
                <div class ="col-md-6">
                    <div class =" myrightctn">
                        <div class ="box"><header>Hello World!</header>
                            <p> We live for a lifestyle and we are known for it </p>
                            <input type ="button" class ="butt-out" value ="LearnMore"/>
                </div>
                
                      
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>
