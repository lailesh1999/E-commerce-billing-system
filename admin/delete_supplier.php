
<?php
include('dbconnect.php');
session_start();
$admin_id = $_SESSION["admin_id"];

$supplier_id = $_GET['supplier_id'];
$query = "update supplier_tbl set deleted='1', deleted_by_id='$admin_id' where supplier_id='$supplier_id'";
$query_result=$link->query($query);
if($query_result)
{
	echo "deleted sucess";
	header('location:view_supplier.php');
}else
{
	echo "not deleted";
}

?>