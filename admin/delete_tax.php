<?php

include('dbconnect.php');
session_start();
$admin_id = $_SESSION["admin_id"];

$tax_id = $_GET['tax_id'];
$query = "update tax_tbl set deleted='1', deleted_by_id='$admin_id' where tax_id='$tax_id'";
$query_result=$link->query($query);
if($query_result)
{
	echo "deleted succesfully";
	header('location:view_tax.php');

}else
{
	echo "not deleted";
}

?>