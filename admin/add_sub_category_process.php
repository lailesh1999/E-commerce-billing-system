<?php

include('dbconnect.php');


if(isset($_POST['addsubcategory']))
{
	session_start();
	$admin_id = $_SESSION['admin_id'];
	$sub_category_name = $_POST['sub_category_name'];
	$category_id = $_POST['category_id'];


	 $query= " insert into sub_category_tbl (category_id,sub_category_name,inserted_by_id) values ('$category_id','$sub_category_name','$admin_id')";
		$query_res=$link->query($query);
		if($query_res)
		{
			echo "data has been inserted";
			header('location:view_sub_category.php');

		}
		else
		{
			echo " not inserted";
		}
}
?>
