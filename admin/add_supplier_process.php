<?php
include('dbconnect.php');
if(isset($_POST['addsupplier']))
{
	session_start();
	$admin_id= $_SESSION['admin_id'];
	$supplier_name=$_POST['supplier_name'];
	$supplier_contact=$_POST['supplier_contact'];
	$supplier_email=$_POST['supplier_email'];
	$supplier_address=$_POST['supplier_address'];
	$gst=$_POST['gst'];
	 $query = "insert into supplier_tbl (supplier_name,supplier_contact,supplier_email,supplier_address,gst,inserted_by_id) values ('$supplier_name','$supplier_contact','$supplier_email','$supplier_address','$gst','$admin_id') ";
		$query_result=$link->query($query);
		if($query_result)
		{
			echo "insertion is sucessfully";
			header('location:view_supplier.php');
		}else
		{
			echo "not inserted";
		}

}





?>