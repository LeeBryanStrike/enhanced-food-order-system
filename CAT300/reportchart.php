<?php  
 $connect = mysqli_connect("localhost", "root", "", "izcatering");  
 
 $sql = "SELECT product_name, sum(product_quantity) as ttl FROM tbl_order_details INNER JOIN tbl_product on tbl_product.name = tbl_order_details.product_name WHERE tbl_product.type = 'food' GROUP BY product_name LIMIT 0,100
 ";
 $result = mysqli_query($connect, $sql);  
$sql2 = "SELECT product_name, sum(product_quantity) as ttl FROM tbl_order_details INNER JOIN tbl_product on tbl_product.name = tbl_order_details.product_name WHERE tbl_product.type = 'drink' GROUP BY product_name LIMIT 0,100
 ";
 $result2 = mysqli_query($connect, $sql2); 
 $sql3 = "SELECT product_name, sum(product_quantity) as ttl FROM tbl_order_details INNER JOIN tbl_product on tbl_product.name = tbl_order_details.product_name WHERE tbl_product.type = 'side' GROUP BY product_name LIMIT 0,100
 ";
 $result3 = mysqli_query($connect, $sql3); 
 ?>  

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MANAGEMENT</title>
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



<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           google.charts.setOnLoadCallback(drawChart2);  
           google.charts.setOnLoadCallback(drawChart3);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Food', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["product_name"]."', ".$row["ttl"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Product Sales',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
              function drawChart2()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Drink', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result2))  
                          {  
                               echo "['".$row["product_name"]."', ".$row["ttl"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Beverage Sales',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechartdrink'));  
                chart.draw(data, options);  
           }  
              function drawChart3()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Sidedish', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result3))  
                          {  
                               echo "['".$row["product_name"]."', ".$row["ttl"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Sidedish Sales',  
                      //is3D:true,  
                      pieHole: 0.4  ,
                    
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechartside'));  
                chart.draw(data, options);  
           }  
           </script>  

</head>

	<body background-color="#000000"><font color="#FF9933" size="+1">


<?php 
	include("header.php");
	
?>
<nav align="center">
	<a href="homemanage.php">HOME</a> 
	<a href="customer.php"> ASSIGN </a>
     <a href="table.php" >REPORT TABLE</a> 
     <a href="reportchart.php" >REPORT CHART</a> 
  
 <p>&nbsp;</p>


<div >  
                <h3 align="center">Quantity Sold Report In Chart</h3>  
                <br />  
              <div class="col-sm-4 col-sm-offset-4">
                <ul class="nav nav-tabs" >
				<li class="active"><a data-toggle="tab" href="#products">Product</a></li>
                <li><a data-toggle="tab" href="#beverage">Beverage </a></li>
                <li><a data-toggle="tab" href="#sidedish">Sidedish </a></li>
				</ul>
            </div>	
<div class="tab-content">			
           <div id="products" class="tab-pane fade in active ">
                <div class=" col-md-10"id="piechart" style="width: 900px; height: 500px;left:20%;"></div>  
         </div>
         <div id="beverage" class="tab-pane fade in active ">
                <div class=" col-md-10"id="piechartdrink" style="width: 900px; height: 500px;left:20%;"></div>  
         </div>
         <div id="sidedish" class="tab-pane fade in active">
                <div class=" col-md-10"id="piechartside" style="width: 900px; height: 500px;left:20%;"></div>  
         </div>
</div>
         
         
           </div>  






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