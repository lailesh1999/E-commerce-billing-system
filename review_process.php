<?php
include('dbconnect.php');
if(isset($_POST['reviewpro']))
{
	$review = $_POST['review'];
	session_start();
	$product_id = $_POST['product_id'];
	$user_id = $_SESSION['user_id'];
	$query="INSERT into review_tbl(review,user_id,product_id) VALUES('$review','$user_id','$product_id') ";
	$query_result = $link->query($query);
	if($query_result)
	{
		echo "review sucess";
		header('location:index1.php');
	}else
	{
		echo "not inserted";
	}

}




?>