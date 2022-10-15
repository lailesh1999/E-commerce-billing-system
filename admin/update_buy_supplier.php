<?php
include("dbconnect.php");
if(isset($_POST['updatebuysupplier']))
{
	
	session_start();
	$admin_id=$_SESSION['admin_id'];
	$product_id = $_POST['product_id'];
	$buy_supplier_id=$_POST['buy_supplier_id'];
	$quantity=$_POST['quantity'];
	$total_price = $_POST['total_price'];
	$purchase_price=$_POST['purchase_price'];
	$supplier_id=$_POST['supplier_id'];
	$invoice_number=$_POST['invoice_number'];

	 echo $query=" UPDATE buy_supplier_tbl set quantity='$quantity',purchase_price='$purchase_price',invoice_number='$invoice_number',product_id='$product_id',supplier_id='$supplier_id',updated_by_id='$admin_id',total_price='$total_price' where buy_supplier_id='$buy_supplier_id'";
	$query_result= $link->query($query);
	if($query_result)
	{
		echo "updated sucessfully";
		header('location:view_buy_supplier.php');
	}else{
		echo "not updated";
	}
	$product_id=$_POST['product_id'];
    $def_quantity=$_POST['def_quantity'];
    echo $def_quantity;
	//$avail_quantity = 0;
	$query ="select  * from product_tbl where product_id='$product_id'";
	$res = $link->query($query);
	while($row = mysqli_fetch_array($res))
	{
		$quantity=$row['quantity'];
	}
	
	$quantity = $quantity+$def_quantity;
	 echo  $query ="UPDATE product_tbl  SET quantity = '$quantity' WHERE product_id='$product_id' ";
	$query_run=$link->query($query);
	if($query_run)
	{
		echo "updated sucessfully";
		header('location:view_buy_supplier.php');
	}else{
		echo"not updated";
	}
}





?>