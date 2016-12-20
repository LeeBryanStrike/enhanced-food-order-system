<?php
//cart.php
session_start();
$connect = mysqli_connect("localhost", "root", "", "izcatering");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>CUSTOMER</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<style>
       body { background: #000000 !important;}
    </style>
		<link rel = "stylesheet" type ="text/css" href= "css/bootstrap.min.css">
        <link href="css/awan.css" type ="text/css" rel="stylesheet" />
	</head>
	
		<body background-color="#000000"><font color="#FF9933" size="+1">
													
              <?php 
	include("header.php");
	
?>        
<div class="global-navbar navbar navbar-default" role="navigation">
      	<div  style="background-color:#000000">			
       <nav align="center">
	    <a href="home33.php">HOME</a> 
		<a href="4.php"> ORDER MENU </a>
        <a href="cart.php" >VIEW RECEIPT</a> 
 <p>&nbsp;</p>
        </div>
</div>
</nav>   
		<br />
		<div class="container" style="width:1200px;">
		<!--database start-->
			<?php
			if(isset($_POST["place_order"]))
			{	$ttl="";
				$ttl=$_POST['totalp'];
				$insert_order = "
				INSERT INTO tbl_order(customer_id, creation_date, order_status,totalprice)
				VALUES('".$_SESSION['CustomerID']."', '".date('Y-m-d')."', 'pending','".$ttl."')
				";
				$order_id = "";
				if(mysqli_query($connect, $insert_order))
				{
					$order_id = mysqli_insert_id($connect);
				}
				$_SESSION["order_id"] = $order_id;
				$order_details = "";
				foreach($_SESSION["shopping_cart"] as $keys => $values)
				{
					$order_details .= "
					INSERT INTO tbl_order_details(order_id, product_name, product_price, product_quantity)
					VALUES('".$order_id."', '".$values["product_name"]."', '".$values["product_price"]."', '".$values["product_quantity"]."');
					";
				}
				if(mysqli_multi_query($connect, $order_details))
				{
					unset($_SESSION["shopping_cart"]);
					echo '<script>alert("You have successfully place an order...Thank you")</script>';
					echo '<script>window.location.href="cart.php"</script>';
				}
			}
//database end
			if(isset($_SESSION["order_id"]))
			{
				$customer_details = '';
				$order_details = '';
				$total = 0;
				$query = '
				SELECT * FROM tbl_order
				INNER JOIN tbl_order_details
				ON tbl_order_details.order_id = tbl_order.order_id
				INNER JOIN tbl_customer
				ON tbl_customer.CustomerID = tbl_order.customer_id
				WHERE tbl_order.order_id = "'.$_SESSION["order_id"].'"
				';
				$result = mysqli_query($connect, $query);
				while($row = mysqli_fetch_array($result))
				{
					$customer_details = '
					<label>'.$row["CustomerName"].'</label>
					<p>'.$row["Address"].'</p>
					<p>'.$row["City"].', '.$row["PostalCode"].'</p>
					<p>'.$row["Country"].'</p>
					';
					$order_details .= "
						<tr>
							<td>".$row["product_name"]."</td>
							<td>".$row["product_quantity"]."</td>
							<td>".$row["product_price"]."</td>
							<td>".number_format($row["product_quantity"] * $row["product_price"], 2)."</td>
						</tr>
					";
					$date_details ='
					<p>Date:'.$row["creation_date"].'</p>
					';
					$total = $total + ($row["product_quantity"] * $row["product_price"]);
				}
				echo '
					
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
				<address>
					'.$customer_details.'
				</address>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em>'.$date_details.'</em>
                    </p>
                    <p>
                        <em>Order #: '.$_SESSION["order_id"].'</em>
                    </p>
					</br>
                </div>
			</div>
				<div class="text-center">
				<h3 align="center">Order Summary for Order No.'.$_SESSION["order_id"].'</h3>
				</div>
				<div class="table-responsive">
					<table class="table">					
						<tr>
							<td>
								<table class="table table-bordered">
									<tr>
										<th width="50%">Product Name</th>
										<th width="15%">Quantity</th>
										<th width="15%">Price</th>
										<th width="20%">Total</th>
									</tr>
									'.$order_details.'
									<tr>
										<td colspan="3" align="right"><label>Total</label></td>
										<td>'.number_format($total, 2).'</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</div>
			</div>
		
	
				';
			}
			
			?>
		</div>
		<footer> 
Contact Us:- <br> 
EMAIL:            
|| NO. Tel:  
<br> 

<p> Copyright ©  </p>
</footer>
	</body>
</html>