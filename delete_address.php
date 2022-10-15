<?php
include('dbconnect.php');
$address_id = $_GET['address_id'];
 		 $query = "UPDATE address_tbl set deleted = '1' where address_id = '$address_id'";
$query_result = $link->query($query);
if($query_result)
{
	echo "deleted sucessfully";
	header('location:view_address.php');
}else
{
	echo "not deleted";
}





?>