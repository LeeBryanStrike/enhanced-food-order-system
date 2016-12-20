<?php  
 $connect = mysqli_connect("localhost", "root", "", "izcatering");  
 
 $sql4 = "SELECT creation_date, sum(totalprice) as sales FROM tbl_order_details 
 INNER JOIN tbl_product on tbl_product.name = tbl_order_details.product_name INNER JOIN tbl_order ON tbl_order_details.order_id = tbl_order.order_id 
 GROUP BY creation_date 
 ";
 $result4 = mysqli_query($connect, $sql4); 
 $result4b = mysqli_query($connect, $sql4);
 $result4c = mysqli_query($connect, $sql4);  
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
           google.charts.load('current', {'packages':['corechart','table']});  
        
           google.charts.setOnLoadCallback(drawTable);
         
              google.charts.setOnLoadCallback(drawChart4);
               function drawTable()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Date', 'Sales(RM)'],  
                          <?php  
                          while($row = mysqli_fetch_array($result4b))  
                          {  
                               echo "['".$row["creation_date"]."', ".$row["sales"]."],";  
                          }  
                          ?>  
                     ]);  
                var table = new google.visualization.Table(document.getElementById('table_div'));
        table.draw(data, {showRowNumber: false, width: '100%', height: '100%'});

           }  
           
                      function drawChart4()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Food', 'Total'],  
                          <?php  
                          while($row = mysqli_fetch_array($result4))  
                          {  
                               echo "['".$row["creation_date"]."', ".$row["sales"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      hAxis: {
          title: 'Date'
        },
        vAxis: {
          title: 'Sales (RM)'
        }, animation:{
            startup : true,
        duration: 3000,
        easing: 'out'
      },
        colors: ['#a52714', '#097138']
                     };  
                var chart = new google.visualization.AreaChart(document.getElementById('piechartoverall'));  
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
                <h3 align="center">Sales Report </h3>  
                <br />  
              <div class="col-sm-6 col-sm-offset-4">
                <ul class="nav nav-tabs" >
				
                <li class="active"><a data-toggle="tab" href="#overall">AreaChart View </a></li>
                <li ><a data-toggle="tab" href="#table">TableView</a></li>
               
				</ul>
            </div>	
<div class="tab-content">			
          
         
         <div id="overall" class="tab-pane fade in active ">
                           
                <div class=" col-md-10"id="piechartoverall" style="width: 900px; height: 500px;left:20%;"></div> <br> 
              
         </div>

         <div id="table" class="tab-pane fade  ">
                 <div class=" col-md-8 col-md-offset-4">
                <div class=" col-md-4"id="table_div" style="font-size: 400%; " ></div>
                 </div>  
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