<?php
    require './includes/common.php';
    // check if signed in
    if(!isset($_SESSION["email_id"])){
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Success</title>
        <!-- link to Bootstrap minified css-->
<link rel= "stylesheet" href ="C:\Users\user\OneDrive\Desktop\project_bootstrap\public_html\newhtml.css" type = "text/css">
        <link rel ="stylesheet" href ="bootstrap/css/bootstrap.min.css" type = "text/css">
        <script type = "text/javascript" src ="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script  type ="text/javascript" src ="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            require './includes/header.php';

            // check all items to confirmed
            $user_id = $_SESSION["id"];
            $query = "SELECT item_id FROM users_items WHERE user_id = '$user_id'";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
            
            while($row = mysqli_fetch_array($result)){
                $item_id = $row["item_id"];
                $query1 = "UPDATE users_items SET status = 'Confirmed' WHERE item_id = '$item_id'";
                
                $result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
            }
        ?>
        <div class="container panel-margin">
            <div class="alert alert-success">
                Your order is confirmed. Thank you for shopping with us.
                <a href="products.php">Click here</a> to purchase any other item.
            </div>
        </div>
        <?php
            require './includes/footer.php';
        ?>
    </body>
</html>