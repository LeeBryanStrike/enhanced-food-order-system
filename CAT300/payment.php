<?php
session_start();
$_SESSION["order_id"]="0";


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CASHIER</title>
 <link rel = "stylesheet" type ="text/css" href= "css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/awan.css" />
 <link rel="stylesheet" href="css/owl.carousel.css"/>
		
		<link rel="stylesheet" href="css/responsive.css"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- BUTTON STYLE CSS-->

<style>
       body { background: #000000 !important;}
    </style>
    <script>
$(document).ready(function(){
    $("#login").click(function(){
        $('#login').hide();
        $('#logout').show();
    });
   
});
function updatesum() {
var numb = (document.form.sum1.value -0) - (document.form.sum2.value -0);

numb = numb.toFixed(2);

document.form.sum.value=document.form.sum.value= numb;
}
</script>
<!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
	<script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>	

</head>

	<body background-color="#000000"><font color="#FF9933" size="+1">


<?php 
	include("header.php");
	
?>
<nav align="center">
	<a href="homecashier.php">HOME</a> 
	<a href="payment.php"> PAYMENT </a>
    <a href="unpay.php"> UNPAY </a>
     <a href="pay.php"> PAID </a>
 
 <p>&nbsp;</p>


<form action="payment.php" method="get">
Order ID: <input type="text" name="orderid">

<input type="submit">
</form>

<?php
if(isset($_GET['orderid'])||($_SESSION["order_id"]))
{   $total=null;
    $order_details=null;
    $cash=0;
    $select ="
    SELECT * FROM tbl_order where tbl_order.order_id=".$_GET["orderid"]."
    ";
    $result = mysqli_query($connect, $select);
    $row = mysqli_fetch_array($result);

    if ($row["order_status"]=='paid')
    {
        echo "You already pay this order";
    }

    else
    {
        if(isset($_POST['cash']))
    {$cash=$_POST['cash'];}
    $orderid= $_GET['orderid'];
    $_SESSION["order_id"] = $orderid;
    $select ="
    SELECT * FROM tbl_order INNER JOIN tbl_order_details ON tbl_order_details.order_id = tbl_order.order_id where tbl_order.order_id=".$_GET["orderid"]."
    ";
    $result = mysqli_query($connect, $select);
    while($row = mysqli_fetch_array($result))
    {
     $order_details .= "
						<tr>
							<td>".$row["product_name"]."</td>
							<td>".$row["product_quantity"]."</td>
							<td>".$row["product_price"]."</td>
							<td>".number_format($row["product_quantity"] * $row["product_price"], 2)."</td>
						</tr>
					";
      $total = $total + ($row["product_quantity"] * $row["product_price"]); 
    }

echo '
					
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
             
				<div class="col-xs-6 col-sm-6 col-md-6 text-right">
                   
                    <p>
                        <em>Order #: '.$orderid.'</em>
                    </p>
					</br>
                </div>
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
<tr>
<td colspan="3" align="right">
    <form name="form" >
Payment:</td><td align="center">
<input name="sum1" onChange="updatesum()" />

<input type="hidden"name="sum2" onChange="updatesum()"value='.$total.' />

</td>

</tr>
<tr><td colspan="3" align="right"><label>Change</label></td>
    <td align="right"><input name="sum" readonly style="border:0px;align:right"></td>
</form>
</tr>
								</table>
							</td>
						</tr>
					</table>
                    <form method="post" action="pay.php">
										<input type="submit" name="pay" class="btn btn-warning" value="Confirm Payment" />
						</form>
                   
				</div>
			</div>
		
	
				';
}
}
                ?>

 <p>&nbsp;</p>  
 
<footer> 
Contact Us:- <br> 
EMAIL:            
|| NO. Tel:  
<br> 


<p> Copyright ©  </p>
</footer>
</body>
</html>