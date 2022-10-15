<?php
include('dbconnect.php');
session_start();
$admin_id = $_SESSION['admin_id'];
$product_img_id = $_GET['product_img_id'];
$product_id=$_GET['product_id'];
$query = "UPDATE product_img_tbl set deleted = '1',deleted_by_id = '$admin_id' where product_img_id = '$product_img_id'";
$query_result = $link->query($query);
if($query_result)
{
	echo "deleted sucess";
	header("location:view_product_img.php?product_id=".$product_id);

}
else{
	echo " not deleted ";
}


?>