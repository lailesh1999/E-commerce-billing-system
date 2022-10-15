<?php

include('dbconnect.php');
session_start();
$admin_id = $_SESSION["admin_id"];

$sub_category_id = $_GET['sub_category_id'];
$query = "update sub_category_tbl set deleted='1', deleted_by_id='$admin_id' where sub_category_id='$sub_category_id'";
$query_result=$link->query($query);
if($query_result)
{
	echo "deleted sucess";
	header('location:view_sub_category.php');
}else
{
	echo "not deleted";
}

?>