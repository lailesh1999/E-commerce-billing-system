<?php
include('dbconnect.php');
if(isset($_POST['updatecustomer']))
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
	$customer_id=$_POST['customer_id'];

	  $query=" UPDATE customer_tbl set customer_name='$customer_name',customer_email='$customer_email',customer_phone_number='$customer_phone_number',customer_address='$customer_address',customer_land_mark='$customer_land_mark',customer_pincode='$customer_pincode',customer_password='$customer_password',updated_by_id='$admin_id'  where customer_id='$customer_id'" ;
	$query_result = $link->query($query);
	if($query_result)
	{
		echo "updated sucessfully";
		header('location:view_customer.php');
	}else{
		echo "not updated";
	}

}




?>