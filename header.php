<nav class = "navbar navbar-inverse navbar-fixed-top">
            <div class ="container">
                <div class = "navbar-header">
                    <button type = "button" class ="navbar-toggle" data-toggle ="collapse" data-target ="#myNavbar">
                        
                        <span class ="icon-bar" ></span>
                        <span class ="icon-bar" ></span>
                        <span class ="icon-bar" ></span>
                        
                    </button>
                    <a class =" navbar-brand" href="index.php">Lifestyle store</a>
                    
                    
                </div>
                <div class ="collapse navbar-collapse" id ="my-Navbar">
                    
                      <?php
                      if(isset($_SESSION["email_id"])){
                          ?>
                       <ul class ="nav navbar-nav navbar-right">
                         
                        
                      
                        <li><a href ="settings.php"><span class ="glyphicon glyphicon-user"></span>Settings</a></li>
                        <li><a href ="logout_script.php"><span class ="glyphicon glyphicon-log-in"></span>Logout</a></li>
                        <li><a href ="cart.php"><span class ="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                        ?>
                        <?php
                      } else{
                          ?>
                         <ul class="nav navbar-nav navbar-right">
                           <li><a href ="signup.php"><span class ="glyphicon glyphicon-user"></span>Sign Up</a></li>
                           <li><a href ="login.php"><span class ="glyphicon glyphicon-log-in"></span>Login</a></li>
                             <?php
                        
                      }
                      ?>
                    </ul>
                    
                </div>
            </div>
        </div>