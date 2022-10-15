<?php
include('dbconnect.php');
if(isset($_POST['updatesubcategory']))
{
	session_start();
	$admin_id = $_SESSION['admin_id'];
	$sub_category_name = $_POST['sub_category_name'];
	$sub_category_id = $_POST['sub_category_id'];
	$category_id = $_POST['category_id'];
     $query = " UPDATE sub_category_tbl SET sub_category_name ='$sub_category_name',updated_by_id='$admin_id',category_id ='$category_id' where sub_category_id = '$sub_category_id'";
	$query_res = $link->query($query);
	if($query_res)
	{
		echo "updated sucessfully";
	header('location:view_sub_category.php');
	}
	else
	{
		echo "not updated";
	}
}

?>