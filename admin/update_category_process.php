<?php

include('dbconnect.php');
if(isset($_POST['updatecategory']))
{
	session_start();
	$admin_id = $_SESSION['admin_id'];
	//$category_image = $_FILES["category_image"]["name"]; 
    //$tempname = $_FILES["category_image"]["tmp_name"];     
     //$folder = "upload/".$category_image;

	$category_name = $_POST['category_name'];
	$category_id = $_POST['category_id'];
    $query = " UPDATE category_tbl SET category_name ='$category_name',updated_by_id='$admin_id' where category_id = '$category_id'";
	$query_res = $link->query($query);
	if($query_res)
	{
		echo "updated sucessfully";
		header('location:view_category.php');
	}
	else
	{
		echo "not updated";
	}
	//if (move_uploaded_file($tempname, $folder))  { 
      //      $msg = "Image uploaded successfully"; 
       // }else{ 
        //    $msg = "Failed to upload image"; 
      //} 
}

?>