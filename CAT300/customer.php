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

<div class="container">
    <div class="col-sm-8 col-sm-offset-2 ">
    <h1 class="well">Add User</h1>
    </div>
	<div class="col-sm-6 col-sm-offset-3 well">
                <div class="tab-pane" id="Registration">
                                <form action="register.php" method = "POST" role="form" class="form-horizontal"style="font-size: 62.5%;">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Name</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="text" id="CusName" name="CusName"class="form-control" placeholder="Name"required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" name="email"placeholder="Email" required/>
                                    </div>
                                </div>
                                <div class="form-group">
									<label for="address" class="col-sm-2 control-label">
									Address</label>
									<div class="col-sm-10">
										<input type="address" class="form-control" id="address" name="address" placeholder="Address"required />
									 </div>
								</div>
								<div class="form-group">
									<label for="country" class="col-sm-2 control-label">
									Country</label>
									<div class="col-sm-5">
										<input type="country" class="form-control" id="country" name="country"placeholder="Country"required />
									 </div>
                                     <label for="state" class="col-sm-1 control-label">
									City</label>
									<div class="col-sm-4">
										<input type="state" class="form-control" id="city" name="city"placeholder="City Name"required />
									 </div>
								</div>
								<div class="form-group">
									<label for="postalcode" class="col-sm-2 control-label">
									Postal Code</label>
									<div class="col-sm-5">
										<input type="postalcode" class="form-control" id="postalcode" name="postalcode" placeholder="Postal Code" required/>
									 </div>
                                     <label for="state" class="col-sm-1 control-label">
									Type</label>
									<div class="col-sm-4">
						<!-- list for select user type (access privilage)-->				 
                                         <select class="form-control" id="type" name="type">
                                            <option value="customer">customer</option>
                                            <option value="kitchen">kitchen</option>
                                            <option value="cashier">cashier</option>
                                            <option value="manage">manage</option>
                                         </select>
                                   <!--      <input type="text" class="form-control" id="type" name="type" placeholder="User Type" />  -->
									 </div>
								</div>
								<div class="form-group">
                                    <label for="username" class="col-sm-2 control-label">
                                        Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="user" name="user"placeholder="Username" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                    
                                        <input type="password" class="form-control" name="password"id="password" placeholder="Password" required />
                                    </div>
                                </div>
                                <div class="row">
                                    
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-lg btn-info">
                                            Save & Continue</button>
                                     </div>
                                </div>
                                </form>
                            </div>
	</div>
	</div>








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