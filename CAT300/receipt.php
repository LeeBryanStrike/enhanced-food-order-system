<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HOME</title>
 <link rel = "stylesheet" type ="text/css" href= "css/bootstrap.min.css">
 <link href="css/awan.css" rel="stylesheet" />
<!-- BUTTON STYLE CSS-->
 <style>
body { background: #ffffff !important; } */
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
	<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong>Elf Cafe</strong>
                        <br>
                        2135 Sunset Blvd
                        <br>
                        Los Angeles, CA 90026
                        <br>
                        <abbr title="Phone">P:</abbr> (213) 484-6829
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em>Date:  <?php echo date ("d-m-Y" )?></em>
                    </p>
                    <p>
                        <em>Receipt #: 34522677W</em>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Receipt</h1>
                </div>
               
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>#</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-9"><em>Baked Rodopa Sheep Feta</em></h4></td>
                            <td class="col-md-1" style="text-align: center"> 2 </td>
                            <td class="col-md-1 text-center">$13</td>
                            <td class="col-md-1 text-center">$26</td>
                        </tr>
                        <tr>
                            <td class="col-md-9"><em>Lebanese Cabbage Salad</em></h4></td>
                            <td class="col-md-1" style="text-align: center"> 1 </td>
                            <td class="col-md-1 text-center">$8</td>
                            <td class="col-md-1 text-center">$8</td>
                        </tr>
                        <tr>
                            <td class="col-md-9"><em>Baked Tart with Thyme and Garlic</em></h4></td>
                            <td class="col-md-1" style="text-align: center"> 3 </td>
                            <td class="col-md-1 text-center">$16</td>
                            <td class="col-md-1 text-center">$48</td>
                        </tr>
                        <?php
                $con = mysqli_connect('localhost','root','','order');
                $query1="SELECT * FROM food ";
                $q= mysqli_query($con,$query1);
                while($row = mysqli_fetch_row($q))
                {
                    ?>
                        <tr>
                            <td><?= $row[0] ?></td> <!--product-->
                            <td><?= $row[2] ?></td> <!--quantity-->
                             <td><?= $row[3] ?></td> <!--price-->
                              <td><?= $row[4] ?></td> <!--total-->
                               
                               
                            </td>
                        </tr>
                    <?php //echo $row[6];
                }
              ?>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right">
                            <p>
                                <strong>Subtotal: </strong>
                            </p>
                            <p>
                                <strong>Tax: </strong>
                            </p></td>
                            <td class="text-center">
                            <p>
                                <strong>$6.94</strong>
                            </p>
                            <p>
                                <strong>$6.94</strong>
                            </p></td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right"><h4><strong>Total: </strong></h4></td>
                            <td class="text-center text-danger"><h4><strong>$31.53</strong></h4></td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-success btn-lg btn-block">
                    Pay Now   <span class="glyphicon glyphicon-chevron-right"></span>
                </button></td>
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