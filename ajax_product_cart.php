<?php
include('dbconnect.php');
$product_id = $_GET['pro_id'];
	session_start();
	$user_id = $_SESSION['user_id'];
	$product_id = $_GET['pro_id'];
	$quantity = $_GET['quantity'];

	 $flag = "0";
	 $query = "SELECT  * from ajax_cart_tbl where user_id='$user_id' and product_id='$product_id'";
	 $query_run = $link->query($query);
	 while($rows=mysqli_fetch_array($query_run))
	{
		//$user_id = $rows['user_id'];
		//$product_id = $rows['product_id'];
		$flag= "1";
	}
	if($flag=="1")
	{
		$query= "DELETE from ajax_cart_tbl   where user_id='$user_id' and product_id ='$product_id'";
		$query_run = $link->query($query);
	} 

	echo $query = "INSERT into ajax_cart_tbl(user_id,product_id,quantity) VALUES ('$user_id','$product_id','$quantity')";
	$query_run = $link->query($query);
	if($query_run)
	{
		echo "inserted to cart";
	}else
	{
		echo " not inserted";
	}






?>