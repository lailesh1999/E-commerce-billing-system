<?php
include('dbconnect.php');
if(isset($_POST['search']))
{
	echo $search = $_POST['search'];
	echo $query="SELECT product_name FROM product_tbl WHERE product_name LIKE 'a%'";
	$query_result = $link->query($query);
	if($query_result)
	{
		//header('location:product.php');
	}
	else{
		echo "not inserted";
	}
}






?> 