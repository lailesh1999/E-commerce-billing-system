<?php
include('dbconnect.php');
if(isset($_POST['addbuysupplier']))
{
	//$buy_supplier_id=$_POST['buy_supplier_id'];
	session_start();
	$admin_id = $_SESSION['admin_id'];
	$product_id=$_POST['product_id'];
	$supplier_id=$_POST['supplier_id'];
	$quantity=$_POST['quantity'];
	$total_price = $_POST['total_price'];
	$purchase_price=$_POST['purchase_price'];
	$invoice_number=$_POST['invoice_number'];
	
	  $query = "insert into buy_supplier_tbl (product_id,supplier_id,quantity,purchase_price,invoice_number,total_price,inserted_by_id) values ('$product_id','$supplier_id','$quantity','$purchase_price','$invoice_number','$total_price','$admin_id')";

	$query_result=$link->query($query);
	if($query_result) {
		echo "inserted";
		header('location:view_buy_supplier.php');
	}else{
		echo "not inserted";
	}


	$product_id=$_POST['product_id'];
	
	$avail_quantity = 0;
	$query ="select  * from product_tbl where product_id='$product_id'";
	$res = $link->query($query);
	while($row = mysqli_fetch_array($res))
	{
		$avail_quantity=$row['quantity'];
	}
	$quantity = $quantity+$avail_quantity;
	$query ="UPDATE product_tbl  SET quantity = '$quantity' WHERE product_id='$product_id' ";
	$query_run=$link->query($query);
}
/*
UPDATE
    Sales_Import
SET
    Sales_Import.AccountNumber = RAN.AccountNumber
FROM
    Sales_Import SI
INNER JOIN
    RetrieveAccountNumber RAN
ON 
    SI.LeadID = RAN.LeadID;
    */
?>