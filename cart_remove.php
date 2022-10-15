<?php
include('dbconnect.php');

$cart_id = $_GET['cart_id'];
echo $query = "UPDATE ajax_cart_tbl set deleted = '1' where cart_id = '$cart_id'";
$query_result = $link->query($query);
if($query_result)
{
	echo "deleted sucess";
	header('location:checkout.php');

}
else{
	echo " not deleted ";
}


?>