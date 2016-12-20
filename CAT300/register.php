<?php // formtest.php
	session_start();
	/*Establish connection to mysql*/
	
	$conn = new mysqli("localhost", "root", "", "izcatering");

        $CusName             =$_POST['CusName']; //
        $type             =$_POST['type'];//
	$userName             =$_POST['user']; //
	$pass                 =$_POST['password']; //
	$email                =$_POST['email']; //
	$address              =$_POST['address']; //
	$country              =$_POST['country']; //
	$postalCode          =$_POST['postalCode']; //
	$city               =$_POST['city']; //

      
	
	
	//insert into customer
        $query = "INSERT INTO tbl_customer (CustomerName, Address, City, PostalCode,Country, username, password, email, type) 
	VALUES (' $CusName', '$address ', '$city', '$postalCode', '$country ', '$userName ', '$pass', '$email', '$type')";
	$result = $conn->query($query);
        if ($result) {
		$_SESSION['regstatus']=true;
		$_SESSION['user']=$userName;
		$_SESSION['password']=$pass;
		header('Location: logInProcess.php');
	}
        if (!$result) echo "INSERT failed: $query<br>" .
	$conn->error . "<br><br>";
?>