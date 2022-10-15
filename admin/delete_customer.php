<?php
include('dbconnect.php');
session_start();
$admin_id = $_SESSION['admin_id'];
$user_id = $_GET['user_id'];
$query = "UPDATE customer_tbl set deleted = '1',deleted_by_id = '$admin_id' where user_id = '$user_id'";
$query_result = $link->query($query);
if($query_result)
{
	echo "deleted sucess";
	header('location:view_customer.php');

}
else{
	echo " not deleted ";
}


?>