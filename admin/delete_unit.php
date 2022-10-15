<?php

include('dbconnect.php');
session_start();
$unit_id = $_GET['unit_id'];
$admin_id = $_SESSION['admin_id'];
 $query = " UPDATE unit_tbl set deleted = '1',deleted_by_id = '$admin_id' where unit_id = '$unit_id '";
$query_result = $link->query($query);
if($query_result)
{
	echo "deleted sucessfully";
	header('location:view_unit.php');
}
else{
	echo "not deleted";
}


//$query = "update tax_tbl set deleted='1', deleted_by_id='$admin_id' where tax_id='$tax_id'";
//$/link->query($query);

?>