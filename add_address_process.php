<?php
include('dbconnect.php');
if(isset($_POST['addaddress']))
{
	session_start();
	$user_id = $_SESSION['user_id'];
	$address = $_POST['address'];
	$pincode = $_POST['pincode'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$land_mark = $_POST['land_mark'];
	$name = $_POST['name'];
	$mobile_number=$_POST['mobile_number'];

	 $query = "INSERT INTO address_tbl (user_id,address,pincode,city,state,land_mark,name,mobile_number) VALUES('$user_id','$address','$pincode','$city','$state','$land_mark','$name','$mobile_number') ";
	$query_run = $link->query($query);
	if($query_run)
	{
		echo "inserted sucessfully";
		header('location:view_address.php');

	}else
	{
		echo "not inserted";
	}

}



?>