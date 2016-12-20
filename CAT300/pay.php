<?php
session_start();
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
<?php
if (isset($_POST["pay"]))
{echo '<script type="text/javascript">',
     'alert("Payment Done!");',
     '</script>'
;
date_default_timezone_set('Asia/Singapore');
$time=  date("Y-m-d H:i:s");
$query = 'UPDATE tbl_order SET order_status = \'paid\'  WHERE tbl_order.order_id = "'.$_SESSION["order_id"].'" ';
$result = mysqli_query($connect, $query);   
$query2 = 'UPDATE tbl_order SET paytime = \''.date("Y-m-d H:i:s").'\'   WHERE tbl_order.order_id = "'.$_SESSION["order_id"].'" ';
$result = mysqli_query($connect, $query2);      
    }
//output unpaid order table
$query3 = "SELECT order_id,order_status,totalprice,paytime FROM `tbl_order` WHERE order_status = 'paid' ORDER BY paytime DESC";
$result2 = mysqli_query($connect, $query3);
$order_details="";
	while($row = mysqli_fetch_array($result2))
		{	$order_details .= "
						<tr>
							<td>".$row["order_id"]."</td>
                            <td>".$row["totalprice"]."</td>
                            <td>".$row["paytime"]."</td>
							<td>".$row["order_status"]."</td>
						</tr>
					";
		}
   echo '
   <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
           	<div class="table-responsive">
					<table class="table">					
						<tr>
							<td>
								<table class="table table-bordered">
									<tr>
										<th width="20%">OrderID</th>
                                        <th width="20%">Amount</th>
                                        <th width="30%">Payment Time</th>
                                        <th width="20%">Payment Status</th>
										
									</tr>
									'.$order_details.'
									
								</table>
							</td>
						</tr>
					</table>
				</div>
			</div>
		
	</div> 
    '
?>
 <p>&nbsp;</p>
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