<?php 

  
$connect = mysqli_connect("localhost", "root", "", "izcatering");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LOGIN</title>
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
<div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="user-menu" >
                     
<!-- Large modal -->

<?php

include ("buttonlogin.php");

?>    
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true" style:"z-index:4">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    X</button>
                <h4 class="modal-title" id="myModalLabel">
                    Login/Registration - </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
                            <li><a href="#Registration" data-toggle="tab">Registration</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                                <form action="logInProcess.php" method = "POST" role="form" class="form-horizontal"style="font-size: 62.5%;">
                                <div class="form-group">
                                    <label for="email" class="col-sm-3 control-label">
                                        UserName</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="username" id="email1" placeholder="UserName" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="col-sm-3 control-label">
                                        Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                    </div>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            Submit</button>
                                        
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="Registration">
                                <form action="register.php" method = "POST" role="form" class="form-horizontal"style="font-size: 62.5%;">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Name</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="text" id="CusName" name="CusName"class="form-control" placeholder="Name" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" name="email"placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
									<label for="address" class="col-sm-2 control-label">
									Address</label>
									<div class="col-sm-10">
										<input type="address" class="form-control" id="address" name="address" placeholder="Address" />
									 </div>
								</div>
								<div class="form-group">
									<label for="country" class="col-sm-2 control-label">
									Country</label>
									<div class="col-sm-5">
										<input type="country" class="form-control" id="country" name="country"placeholder="Country" />
									 </div>
								</div>
								<div class="form-group">
									<label for="postalcode" class="col-sm-2 control-label">
									Postal Code</label>
									<div class="col-sm-5">
										<input type="postalcode" class="form-control" id="postalcode" name="postalcode" placeholder="Postal Code" />
									 </div>
								</div>
								<div class="form-group">
									<label for="state" class="col-sm-2 control-label">
									City</label>
									<div class="col-sm-5">
										<input type="state" class="form-control" id="city" name="city"placeholder="City Name" />
									 </div>
								</div>
                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label">
                                        Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="user" name="user"placeholder="Username" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                    <input type="hidden" name="type"  value="customer" />
                                        <input type="password" class="form-control" name="password"id="password" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            Save & Continue</button>
                                     </div>
                                </div>
                                </form>
                            </div>
                        </div> 
					</div>
                </div>
            </div>
        </div>
    </div>
</div>

</li>
</ul>
</div>			
</div>
	<div class="col-md-6">
		<div class="social-icons pull-right">
			<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/groups/354143098277924/"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a></li>
								<li><a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				  </div>
				 </div>
	
               
<div class="global-navbar navbar navbar-default" role="navigation">
				<div  style="background-color:#000000">												
                        <p align="center"><img src="images/welcome.gif" alt="welcome" width="431" height="223" /></p>
			   	</div> 
</div>
         <h1 class="section-title" align=center>
              	<font face="Arial, Helvetica, sans-serif" size="+2">~Login to begin the journey~ </font></h1>

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