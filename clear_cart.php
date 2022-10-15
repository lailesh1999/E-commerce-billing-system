<?php

include('dbconnect.php');
 echo $query=" DELETE from ajax_cart_tbl where deleted = '0'";
$query_run = $link->query($query);
if($query_run)
{
	echo "deletd sucess";
	header('location:checkout.php');
}else
{
	echo "not deleted";
}

?> 