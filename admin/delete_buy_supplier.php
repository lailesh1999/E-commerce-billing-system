
<?php
include('dbconnect.php');
session_start();
$admin_id = $_SESSION["admin_id"];

$buy_supplier_id = $_GET['buy_supplier_id'];
$query = "update buy_supplier_tbl set deleted='1', deleted_by_id='$admin_id' where buy_supplier_id='$buy_supplier_id'";
$query_result=$link->query($query);
if($query_result)
{
	echo "deleted sucess";
	header('location:view_buy_supplier.php');
}else
{
	echo "not deleted";
}

?>