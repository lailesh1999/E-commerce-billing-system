<?php

include('dbconnect.php');

if(isset($_POST['addcustomer']))
{
	session_start();
	$admin_id=$_SESSION['admin_id'];
	$customer_name=$_POST['customer_name'];
	$customer_email=$_POST['customer_email'];
	$customer_phone_number=$_POST['customer_phone_number'];
	$customer_address=$_POST['customer_address'];
	$customer_land_mark=$_POST['customer_land_mark'];
	$customer_pincode=$_POST['customer_pincode'];
	$customer_password=$_POST['customer_password'];
	echo $query =" INSERT INTO customer_tbl (customer_name,customer_email,customer_phone_number,customer_address,customer_land_mark,customer_pincode,customer_password,inserted_by_id) VALUES ('$customer_name','$customer_email','$customer_phone_number','$customer_address','$customer_land_mark','$customer_pincode','$customer_password','$admin_id') ";
		$query_result = $link->query($query);
		if($query_result){
			echo "insertion sucessfully";
			header('location:view_customer.php');

		}else{
			echo "not inserted";
		}

}

?>