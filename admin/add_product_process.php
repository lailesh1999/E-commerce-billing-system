<?php
include('dbconnect.php');
if(isset($_POST['addproduct']))
{
	session_start();
	$admin_id = $_SESSION['admin_id'];
	$product_name = $_POST['product_name'];
	$product_description =$_POST['product_description'];
	$product_code=$_POST['product_code'];
	$quantity=$_POST['quantity'];
	$product_price = $_POST['product_price'];
	$discount=$_POST['discount'];
	$selling_price=$_POST['selling_price'];
	$unit_id=$_POST['unit_id'];
	$tax_id=$_POST['tax_id'];
	$category_id = $_POST['category_id'];
	$sub_category_id = $_POST['sub_category_id'];


	$query= " insert into product_tbl (unit_id,tax_id,category_id,sub_category_id,product_name,product_description,product_code,quantity,product_price,discount,selling_price,inserted_by_id) values ('$unit_id','$tax_id','$category_id','$sub_category_id','$product_name','$product_description','$product_code','$quantity','$product_price','$discount','$selling_price','$admin_id')  ";
		$query_res=$link->query($query);
		if($query_res)
		{
			echo "data has been inserted";
			header('location:view_product.php');

		}
		else
		{
			echo " not inserted";
		}

}




?>