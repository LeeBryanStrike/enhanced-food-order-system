 <?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "izcatering");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="cancel_order.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="cancel_order.php"</script>';  
                }  
           }  
      }  
 }  
 ?>  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HOME</title>
 <link rel = "stylesheet" type ="text/css" href= "css/bootstrap.min.css">
 <link href="css/awan.css" rel="stylesheet" />
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script>
var inserts = false;

</script>
<!-- BUTTON STYLE CSS-->
 <style>
body { background: #000000 !important; } */
</style>

</head>

<body>



<div class="global-navbar navbar navbar-default" role="navigation">
				<div  style="background-color:#000">												
                        <p align="center"><img src="images/welcome.gif" alt="welcome" width="431" height="223" /></p>
			   	</div> 
</div>

<nav align="center">
	<a href="home.php">HOME</a> 
	<div class="dropdown">
  		<button class="dropbtn">MENU & ORDER</button>
          <div class="dropdown-content">
            <a href="food.php">Food</a>
            <a href="beverage.php">Beverages</a>
            <a href="sidedish.php">Side Dish</a>
          </div>
   	</div>
     <a href="cancel_order.php">CANCEL ORDER</a>
     <a href="receipt.php" >VIEW RECEIPT</a> 
      <a href="cart1.php" >SHOP CART</a> 
      <a href="try2.php" >try</a> 
 <p>&nbsp;</p>

</nav>
<hr />
<!-- Begin How It Works Section -->
<!--			<section class="how-it-works home-section">
			  <h1 class="section-title">
              	<font face="Arial, Helvetica, sans-serif" size="+2">How to Make an Order? </font></h1>
                <p align="center"><img class="img-block" alt="" src="how_foodOrderSystem_work.png"/>
                </a></p>
</section> -->
<!-- End How It Works Section -->
	
<br />  
           <div class="container" >  
                <h3 align="center">  <font face="Courier New, Courier, monospace" color="#FF6600" size="+4"> SELECT WHAT YOU WANT TO EAT </font></h3><br />  
                <?php  
                $query = "SELECT * FROM tbl_product ORDER BY id ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-3">  
                     <form method="post" action="cancel_order.php?action=add&id=<?php echo $row["id"]; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; width:100%;height:300px;" align="center">  
                              <img src="images/<?php echo $row["type"]; echo$row["image"];?>" class="img-responsive" style="height:100px" /><br />
                               <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
                               <h4 class="text-danger">RM <?php echo $row["price"]; ?></h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />  
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td>$ <?php echo $values["item_price"]; ?></td>  
                               <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td><a href="cancel_order.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">$ <?php echo number_format($total, 2); ?></td>  
                               
                              <td><a href="receipt.php"><span class="text-danger">Confirm</span></a></td>  
                          </tr>  
                          <?php  
                          }     
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  
<footer> 
Contact Us:- <br> 
EMAIL:            
|| NO. Tel:  
<br> 


<p> Copyright ©  </p>
</footer>
</body>
</html>


