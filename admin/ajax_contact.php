<?php
include('dbconnect.php');
$user_id = $_GET["cust_id"];
$query = "SELECT * from customer_tbl where user_id = '$user_id' and deleted='0'";
$query_result = $link->query($query);
while($rows = mysqli_fetch_array($query_result))
{
	$customer_name = $rows['customer_name'];
	$customer_phone_number = $rows['customer_phone_number'];
	//$selling_price = $rows['selling_price'];
	//$quantity = $rows['quantity'];
	//$total = $quantity * $selling_price;
}

echo "$customer_phone_number";




?>