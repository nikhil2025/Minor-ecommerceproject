<?php
reuire 'C:\Users\user\OneDrive\Desktop\includes\common.php';
if(!sset($_SESSION["email_id"])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MY CART</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel= "stylesheet" href ="C:\Users\user\OneDrive\Desktop\project_bootstrap\public_html\newhtml.css" type = "text/css">
        <link rel ="stylesheet" href ="bootstrap/css/bootstrap.min.css" type = "text/css">
        <script type = "text/javascript" src ="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script  type ="text/javascript" src ="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
         <?php 
            require 'C:\Users\user\OneDrive\Desktop\includes\header.php';
 $user_id = "$_SESSION[ "id "];
$query = "SELECT p.id,p.name,p.price FROM items p INNER JOIN  users_items up on up.item_id = p.id WHERE  up.user_id ='$user_id' AND up.status ='Added to cart' ";
$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
if(mysqli_num_rows($result)==0){
echo " add products to cart first.goto <a href ="products.php">Products</a>Page.
}else{
$total =0;
?>
                  
        <div class ="cart">
        <div class ="container">
        <div class ="row decor-bg">
            <div class ="col-md-6 col-md-offset-3">
                <table class ="table table-striped">
                    <thead>
                        <tr>
                            <th>ITEM NUMBER</th>
                            <th>ITEM NAME</th>
                            <th>PRICE</th>
                            <th></th>
                        </tr>
</thead>
          <?php while($row = mysqli_fetch_array($result)){ ?>
                    <tbody>
                        <tr>
                            <td> <?php echo $row["id"]?></td>  
 
                             <td> <?php echo $row["name"]?></td>
                               <td><?php $total += $row["price"]; echo $row["price"]?></td>
                               <td>< href ="cart-remove.php?id =<?php echo $row["id"];?>">Remove</a></td>
                        </tr>
<?php
}
?>
<tr>
<td></td>
<td></td>
<td>Total : <i class ="fa fa-rupee"></i><?php echo $total ;?></td>
<td><a href ="success.php" class "btn btn-primary"?Confirm Order</a></td>
</tr>
                    </tbody>
                </table>
            </div>
        <?php 
}
require 'C:\Users\user\OneDrive\Desktop\includes\footer.php';
?>
            
    </body>
</html>
