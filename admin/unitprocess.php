<?php
/*

include('dbconnect.php');
if(isset($_POST['addunit']))
{
	session_start();
	$admin_id = $_SESSION['admin_id'];
	$unit_name = $_POST['unit_name'];
	$query= " insert into unit_tbl (unit_name,inserted_by_id) values ('$unit_name','$admin_id') ";
		$query_res=$link->query($query);
		if($query_res)
		{
			echo "data has been inserted";
			header('location:view_unit.php');

		}
		else
		{
			echo " not inserted";
		}

}


if(isset($_POST['updateunit']))
{
	session_start();
	$admin_id = $_SESSION['admin_id'];
	$unit_name = $_POST['unit_name'];
	$unit_id = $_POST['unit_id'];
    $query = " UPDATE unit_tbl SET unit_name ='$unit_name',updated_by_id = $admin_id  where unit_id = '$unit_id'";
	$query_res = $link->query($query);
	if($query_res)
	{
		echo "updated sucessfully";
		header('location:view_unit.php');
	}
	else
	{
		echo "not updated";
	}
}

if(isset($_POST['addtax']))
{
	session_start();
	$admin_id= $_SESSION["admin_id"];
	$tax_rate = $_POST['tax_rate'];
	$tax_name = $_POST['tax_name'];
	$query= " insert into tax_tbl (tax_name,tax_rate,inserted_by_id) values ('$tax_name','$tax_rate','$admin_id')  ";
		$query_res=$link->query($query);
		if($query_res)
		{
			echo "data has been inserted";
			header('location:view_tax.php');

		}
		else
		{
			echo " not inserted";
		}

}

if(isset($_POST['updatetax']))
{
	session_start();
	$admin_id = $_SESSION["admin_id"];
	$tax_name = $_POST['tax_name'];
	$tax_rate = $_POST['tax_rate'];
	$tax_id = $_POST['tax_id'];
     $query = " UPDATE tax_tbl SET updated_by_id = '$admin_id',tax_name ='$tax_name', tax_rate = '$tax_rate' where tax_id = '$tax_id'";
	$query_res = $link->query($query);
	if($query_res)
	{
		echo "updated sucessfully";
		header('location:view_tax.php');
	}
	else
	{
		echo "not updated";
	}
}

if(isset($_POST['addcategory']))
{
	session_start();
	$admin_id=$_SESSION['admin_id'];
	$category_image = $_FILES["category_image"]["name"]; 
    $tempname = $_FILES["category_image"]["tmp_name"];     
     $folder = "upload/".$category_image; 
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





if(isset($_POST['updatecategory']))
{
	session_start();
	$admin_id = $_SESSION['admin_id'];
	$category_image = $_FILES["category_image"]["name"]; 
    $tempname = $_FILES["category_image"]["tmp_name"];     
     $folder = "upload/".$category_image;

	$category_name = $_POST['category_name'];
	$category_id = $_POST['category_id'];
    $query = " UPDATE category_tbl SET category_name ='$category_name',category_image='$category_image',updated_by_id='$admin_id' where category_id = '$category_id'";
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
	if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
      } 
}

/*
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["category_image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["addcategory"])) {
  $check = getimagesize($_FILES["category_image"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
*/
/*
if(isset($_POST['addsubcategory']))
{
	session_start();
	$admin_id = $_SESSION['admin_id'];
	$sub_category_name = $_POST['sub_category_name'];
	$category_id = $_POST['category_id'];


	echo $query= " insert into sub_category_tbl (category_id,sub_category_name,inserted_by_id) values ('$category_id','$sub_category_name','$admin_id')";
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
*/
/*
if(isset($_POST['updatesubcategory']))
{
	session_start();
	$admin_id = $_SESSION['admin_id'];
	$sub_category_name = $_POST['sub_category_name'];
	$sub_category_id = $_POST['sub_category_id'];
     $query = " UPDATE sub_category_tbl SET sub_category_name ='$sub_category_name',updated_by_id='$admin_id' where sub_category_id = '$sub_category_id'";
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

*/
/*
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


	$query= " insert into product_tbl (product_name,product_description,product_code,quantity,product_price,discount,selling_price,inserted_by_id) values ('$product_name','$product_description','$product_code','$quantity','$product_price','$discount','$selling_price','$admin_id')  ";
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
	  $query = " UPDATE product_tbl SET product_name ='$product_name',product_description='$product_description',product_code='$product_code',quantity='$quantity',product_price='$product_price',discount='$discount',selling_price='$selling_price',updated_by_id='$admin_id' where product_id = '$product_id'";
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
*/
?>
