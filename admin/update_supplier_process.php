<?php
include('dbconnect.php');
if(isset($_POST['updatesupplier']))
{
	session_start();
	$admin_id= $_SESSION['admin_id'];
	$supplier_name=$_POST['supplier_name'];
	$supplier_contact=$_POST['supplier_contact'];
	$supplier_email=$_POST['supplier_email'];
	$supplier_address=$_POST['supplier_address'];
	$gst=$_POST['gst'];
	$supplier_id = $_POST['supplier_id'];
     $query = " UPDATE supplier_tbl SET updated_by_id = '$admin_id',supplier_name ='$supplier_name',supplier_contact ='$supplier_contact',supplier_email ='$supplier_email',supplier_address ='$supplier_address',gst='$gst'  where supplier_id = '$supplier_id'";
	$query_res = $link->query($query);
	if($query_res)
	{
		echo "updated sucessfully";
		header('location:view_supplier.php');
	}
	else
	{
		echo "not updated";
	}
}




?>