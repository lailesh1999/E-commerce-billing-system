<?php
include('dbconnect.php');
session_start();
$admin_id = $_SESSION['admin_id'];
$category_id = $_GET['category_id'];
$query = "UPDATE category_tbl set deleted = '1',deleted_by_id = '$admin_id' where category_id = '$category_id'";
$query_result = $link->query($query);
if($query_result)
{
	echo "deleted sucess";
	header('location:view_category.php');

}
else{
	echo " not deleted ";
}


?>