<?php
       session_start();

       
       if(isset($_SESSION['regstatus'])){
          $username = $_SESSION['user'];
          $password = $_SESSION['password'];
          unset($_SESSION['regstatus']);
           echo $_SESSION['regstatus']."lkl";
       }
       else{
       
       $username = $_POST['username'];
       $password = $_POST['password'];
      // echo $username;
      // echo "faf".$password;
       }
      

       $username = stripcslashes($username);
       $password = stripcslashes($password);


       //connect to database
     
$connect = mysqli_connect("localhost", "root", "", "izcatering");
	
           $select ="
    SELECT * FROM tbl_customer where username = '".$username."' and password = '".$password."'
    ";
    $result = mysqli_query($connect, $select);
    $row = mysqli_fetch_array($result);
     echo $row["password"];
           // echo "<br> bas " .$password."<br>";
            if($row["password"] ==  $password)
            {     $_SESSION['login']=true;
              //forward back to main menu
                  if ($row["type"]=="manage")
                {  header('Location: homemanage.php'); }
                  else if ($row["type"]=="kitchen")
                {  header('Location: home44.php'); }
                   else if ($row["type"]=="cashier")
                {  header('Location: homecashier.php'); }
                  else 
                {  $_SESSION['CustomerID'] = $row["CustomerID"];
                   header('Location: home33.php'); }

            }
            else
            {
                   
                    echo '<script>alert("wrong password...Thank you")
                    window.location.href=\'index.php\';
                    </script>';
            }




?>