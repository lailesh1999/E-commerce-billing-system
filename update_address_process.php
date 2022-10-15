<?php
include('dbconnect.php');
if(isset($_POST['updateaddress']))
{
	$address_id=$_POST['address_id'];
	$address = $_POST['address'];
	$pincode = $_POST['pincode'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$land_mark = $_POST['land_mark'];
	$name = $_POST['name'];
	$mobile_number=$_POST['mobile_number'];
     $query = " UPDATE address_tbl SET address = '$address',pincode='$pincode',city='$city',state='$state',land_mark='$land_mark',name='$name',mobile_number='$mobile_number'where address_id = '$address_id'";
	$query_res = $link->query($query);
	if($query_res)
	{
		echo "updated sucessfully";
	header('location:view_address.php');
	}
	else
	{
		echo "not updated";
	}
}

?>