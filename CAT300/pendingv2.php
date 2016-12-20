<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "izcatering");
$_SESSION["order_id"]=6;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KITCHEN</title>
 <link rel = "stylesheet" type ="text/css" href= "css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/awan.css" />
 <link rel="stylesheet" href="css/owl.carousel.css"/>
		
		<link rel="stylesheet" href="css/responsive.css"/>
       

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>;

 
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css"/>;

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
</script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
   <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
	<script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    <!-- Datatavle javascript -->
      <script src="http://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
    <!-- Main Script -->
    <script src="js/main.js"></script>	

</head>

	<body background-color="#000000"><font color="#FF9933" size="+1">


<?php 
	include("header.php");
	
?>
<nav align="center">
	<a href="home44.php">HOME</a> 
	<a href="pendingv2.php"> PENDING ORDER </a>
  <a href="done.php" >COMPLETED ORDER</a> 
  
 <p>&nbsp;</p>

</nav>
<hr />
<div class="col-sm-4 col-sm-offset-4">
 <ul class="nav nav-tabs" >
				<li class="active"><a data-toggle="tab" href="#products">Product</a></li>
                <li><a data-toggle="tab" href="#beverage">Beverage </a></li>
                <li><a data-toggle="tab" href="#sidedish">Sidedish </a></li>
				
			</ul>
</div>	
	
 <p>&nbsp;</p>
 <?php
if(isset($_SESSION["order_id"]))
			{?>
	<div class="tab-content">			
           <div id="products" class="tab-pane fade in active ">
				 <?php
                $customer_details = '';
				$order_details = '';
				$total = 0; $tab = 'product';
				$query = '
				SELECT `tbl_order_details`.`id` ,product_name,product_quantity,product_status 
				FROM tbl_order_details
				INNER JOIN tbl_product
                on tbl_product.name = tbl_order_details.product_name
				WHERE tbl_order_details.product_status = "pending" AND 
                tbl_product.type = "food"
				';
				$result = mysqli_query($connect, $query);
				while($row = mysqli_fetch_array($result))
				{			
					$order_details .= "
						<tr>
                           
							<td>".$row["product_name"]."</td>
							<td>".$row["product_quantity"]."</td>
							<td>".$row["product_status"]."</td>
						    
							<td>"."
							<form method=\"post\" action=\"complete.php\">
										<input type=\"hidden\" name=\"id\" id=\"id\" value=".$row["id"]."  />
										<input type=\"submit\" name=\"place_order\" class=\"btn btn-warning\" value=\"complete\" />
									</form>
							</td>
                        </tr>
					";
					$total = $total + ($row["product_quantity"] );
				}
?>
        <div class="row">
            <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
           	<div class="table-responsive">
					<table class="table">					
						<tr>
							<td>
								<table class="table table-bordered">
									<tr>
										
                                        <th width="40%">Product Name</th>
										<th width="15%">Quantity</th>
										<th width="20%">Status</th>
                                        <th width="10%">Action</th>
									</tr>	
                                    <?php echo $order_details  ?>  	
                                    <tr>
										<td colspan="2" align="right"><label>Total</label></td>
										<td>
                                        <?php  echo number_format($total,0)  ?>  
                                        </td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
</div>
<!-- beverage -->
 <div id="beverage" class="tab-pane fade  ">
				 <?php
                $customer_details = '';
				$order_details = '';
				$total = 0; $tab = 'product';
				$query = '
				SELECT `tbl_order_details`.`id` ,product_name,product_quantity,product_status 
				FROM tbl_order_details
				INNER JOIN tbl_product
                on tbl_product.name = tbl_order_details.product_name
				WHERE tbl_order_details.product_status = "pending" AND 
                tbl_product.type = "drink"
				';
				$result = mysqli_query($connect, $query);
				while($row = mysqli_fetch_array($result))
				{			
					$order_details .= "
						<tr>
                            
							<td>".$row["product_name"]."</td>
							<td>".$row["product_quantity"]."</td>
							<td>".$row["product_status"]."</td>
						    
							<td>"."
							<form method=\"post\" action=\"complete.php\">
										<input type=\"hidden\" name=\"id\" id=\"id\" value=".$row["id"]."  />
										<input type=\"submit\" name=\"place_order\" class=\"btn btn-warning\" value=\"complete\" />
									</form>
							</td>
                        </tr>
					";
					$total = $total + ($row["product_quantity"] );
				}
?>
        <div class="row">
            <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
           	<div class="table-responsive">
					<table class="table">					
						<tr>
							<td>
								<table class="table table-bordered">
									<tr>
										
                                        <th width="40%">Product Name</th>
										<th width="15%">Quantity</th>
										<th width="20%">Status</th>
                                        <th width="10%">Action</th>
									</tr>	
                                    <?php echo $order_details  ?>  	
                                    <tr>
										<td colspan="2" align="right"><label>Total</label></td>
										<td>
                                        <?php  echo number_format($total,0)  ?>  
                                        </td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
</div>
<!-- sidedish -->
 <div id="sidedish" class="tab-pane fade  ">
				 <?php
                $customer_details = '';
				$order_details = '';
				$total = 0; $tab = 'product';
				$query = '
				SELECT `tbl_order_details`.`id` ,product_name,product_quantity,product_status 
				FROM tbl_order_details
				INNER JOIN tbl_product
                on tbl_product.name = tbl_order_details.product_name
				WHERE tbl_order_details.product_status = "pending" AND 
                tbl_product.type = "side"
				';
				$result = mysqli_query($connect, $query);
				while($row = mysqli_fetch_array($result))
				{			
					$order_details .= "
						<tr>
                            
							<td>".$row["product_name"]."</td>
							<td>".$row["product_quantity"]."</td>
							<td>".$row["product_status"]."</td>
						    
							<td>"."
							<form method=\"post\" action=\"complete.php\">
										<input type=\"hidden\" name=\"id\" id=\"id\" value=".$row["id"]."  />
										<input type=\"submit\" name=\"place_order\" class=\"btn btn-warning\" value=\"complete\" />
									</form>
							</td>
                        </tr>
					";
					$total = $total + ($row["product_quantity"] );
				}
?>
        <div class="row">
            <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
           	<div class="table-responsive">
					<table class="table">					
						<tr>
							<td>
								<table class="table table-bordered">
									<tr>
										
                                        <th width="40%">Product Name</th>
										<th width="15%">Quantity</th>
										<th width="20%">Status</th>
                                        <th width="10%">Action</th>
									</tr>	
                                    <?php echo $order_details  ?>  	
                                    <tr>
										<td colspan="2" align="right"><label>Total</label></td>
										<td>
                                        <?php  echo number_format($total,0)  ?>  
                                        </td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
</div>
<!-- end of tab content -->
	</div>
				<?php
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