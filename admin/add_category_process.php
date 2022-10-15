<?php
include('dbconnect.php');
if(isset($_POST['addcategory']))
{
	session_start();
	$admin_id=$_SESSION['admin_id'];
	$category_image = $_FILES["category_image"]["name"]; 
    $tempname = $_FILES["category_image"]["tmp_name"];     
    $folder = "uploads/".$category_image; 
	$category_name = $_POST['category_name'];
	 $query = " insert into category_tbl (category_name,category_image,inserted_by_id) values ('$category_name','$category_image','$admin_id')";
	 $query_res = $link->query($query);
	 if($query_res)
	 {
	 	echo "inserted sucessfully";
	 	header('location:view_category.php');

	 }
	 else
	 {
	 	echo "not inserted";
	 }
	 if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
      } 
  } 
?>