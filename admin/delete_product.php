<?php

include('dbconnect.php');
session_start();
$admin_id = $_SESSION["admin_id"];

$product_id = $_GET['product_id'];
$query = "update product_tbl set deleted='1', deleted_by_id='$admin_id' where product_id='$product_id'";
$query_result=$link->query($query);
if($query_result)
{
	echo "deleted successfully";
	header('location:view_product.php');
}
	else
	{
		echo "not deleted";
	}

?>