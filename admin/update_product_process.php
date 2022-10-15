<?php
include('dbconnect.php');
if(isset($_POST['updateproduct']))
{
	session_start();
	$admin_id = $_SESSION['admin_id'];
    $product_id = $_POST['product_id'];
	$product_name = $_POST['product_name'];
	$product_description =$_POST['product_description'];
	$product_code=$_POST['product_code'];
	$quantity=$_POST['quantity'];
	$product_price = $_POST['product_price'];
	$discount=$_POST['discount'];
	$selling_price=$_POST['selling_price'];
	$category_id=$_POST['category_id'];
	$unit_id =$_POST['unit_id'];
	$tax_id=$_POST['tax_id'];
	$sub_category_id=$_POST['sub_category_id'];

	   $query = " UPDATE product_tbl SET product_name ='$product_name',product_description='$product_description',product_code='$product_code',quantity='$quantity',product_price='$product_price',discount='$discount',selling_price='$selling_price',category_id='$category_id',tax_id ='$tax_id',sub_category_id='$sub_category_id',unit_id='$unit_id',updated_by_id='$admin_id' where product_id ='$product_id'";
	$query_res=$link->query($query);
	if($query_res)
	{
		echo "updated sucessfully";
		header('location:view_product.php');
	}
	else
	{
		echo "not updated";
	}
}




?>