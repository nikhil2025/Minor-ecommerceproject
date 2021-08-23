

<html>
    <head>
        
        <title>LIFESTYLE STORE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel ="stylesheet" href =" C:\Users\user\OneDrive\Desktop\project_bootstrap\public_html\loginstyle.css">
        <link rel ="stylesheet" href ="bootstrap/css/bootstrap.min.css" type = "text/css">
        <script type = "text/javascript" src ="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script  type ="text/javascript" src ="bootstrap/js/bootstrap.min.js"></script>
    </head>

    <body>
<?php 
require "C:\Users\user\OneDrive\Desktop\includes\header.php";
?>
        <div id ="content">
            <div class ="container-fluid decor_bg">
                <div class ="row">
                    <div class ="col-md-4 col-md-offset-4">
                        <div class ="panel panel-primary">
                            <div class =" panel-heading">
                                <h4>LOGIN</h4>
                            </div>
                            <div class ="panel-body">
                                <p class ="text-warning">Login to make a purchase</p>
                                <form  method = "POST" action ="login_submit.php" class ="myform text-center">
                                    <div class ="form-group">
                           <i class ="fas fa-envelope"></i>
                           <span class ="glyphicon glyphicon-envelope"></span>
                           <input class =" myinput" type ="text" placeholder ="email" id = "email" name ="email" required >
                            <div class ="invalid-feedback">please fill out this field.</div>
                        </div>
                        <div class ="form-group">
                           <i class ="fas fa-lock"></i>
                           <span class ="glyphicon glyphicon-lock"></span>
                           <input class =" myinput" type ="password" placeholder ="password" id = "password" name ="password" required >
                           <div class ="invalid-feedback">please fill out this field.</div></div>
                           <button type ="submit" name ="submit" class= "btn btn-primary">LOGIN</button><br><br>
                           
                                </form>
                            </div>
                            <div class ="panel-footer"><p>Don't have an account?<a href="signup.html">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<?php
require "C:\Users\user\OneDrive\Desktop\includes\footer.php";
?>
    </body>
</html>


