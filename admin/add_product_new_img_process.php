<?php
include('dbconnect.php');
if(isset($_POST['addimg']))
{
	session_start();
	$admin_id=$_SESSION['admin_id'];
	$product_img = $_FILES["product_img"]["name"]; 
	$product_id = $_POST['product_id'];
    $tempname = $_FILES["product_img"]["tmp_name"];     
     $folder = "product_img/".$product_img; 
	 echo $query = " insert into product_img_tbl (product_id,product_img,inserted_by_id) values ('$product_id','$product_img','$admin_id')";
	 $query_res = $link->query($query);
	 if($query_res)
	 {
	 	echo "inserted sucessfully";
	 	header("location:view_product_img.php?product_id=".$product_id);

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