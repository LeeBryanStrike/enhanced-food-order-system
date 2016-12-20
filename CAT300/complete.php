<?php
$id=$_POST["id"];

$connect = mysqli_connect("localhost", "root", "", "izcatering");
	//sql quote

   echo $id;        
$select ="
 UPDATE `tbl_order_details` SET `product_status` = 'served' WHERE `tbl_order_details`.`id` =".$id.";
  ";
   if( $result = mysqli_query($connect, $select))

 header('Location: pendingv2.php');
    else{
        header('Location: pendingv2.php');}
?>