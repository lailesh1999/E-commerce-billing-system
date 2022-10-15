<?php
include('dbconnect.php');
//$order_no = "0";
session_start();
if(isset($_POST['placeorder']))
{
	$address_id = $_POST['address_id'];
	$user_id = $_SESSION['user_id'];
	$order_no = rand(1000000,10000000);
	$query1 =" SELECT p.selling_price,c.quantity,p.product_id,c.cart_id from product_tbl p,ajax_cart_tbl c where c.product_id = p.product_id and c.user_id = '$user_id' and c.deleted = '0' and p.deleted = '0' ";
	$grand_total =0;
	$query_result = $link->query($query1);
	while($rows = mysqli_fetch_array($query_result))
	{
		$selling_price = $rows['selling_price'];
		$quantity = $rows['quantity'];
		$total_price = $quantity * $selling_price;
  		$grand_total = $grand_total + $total_price;
	} 
	
	 $query="INSERT INTO invoice_tbl (order_no,user_id,address_id,grand_total) values('$order_no','$user_id','$address_id','$grand_total')  ";
	$query_res = $link->query($query);
	$invoice_id = $link->insert_id;
	if($query_res)
	{
		 header('location:checkout.php?msg=1');
	}else{
		echo "not inserted";
	}
	$query2 = " SELECT p.selling_price,c.quantity,p.product_id,c.cart_id from product_tbl p,ajax_cart_tbl c where c.product_id = p.product_id and c.user_id = '$user_id' and c.deleted = '0' and p.deleted = '0' ";
	$grand_total =0;
	$total_quantity =0;
	//$price = "0";
	$query_run = $link->query($query2);
	while($rows = mysqli_fetch_array($query_run))
	{
		$selling_price = $rows['selling_price'];
		$product_id = $rows['product_id'];
		$quantity = $rows['quantity'];
		
  		 $query_invoice_detail = " INSERT INTO invoice_detail_tbl (invoice_id,product_id,quantity,price) values('$invoice_id','$product_id','$quantity','$selling_price') ";
			$query_run_invoice_detail = $link->query($query_invoice_detail);
	} 
	/*
	if($query_run_invoice_detail)
{
	echo "inserted sucessfully";
}else{
	echo " not inserted";
}
*/	
	$query3 =" DELETE from ajax_cart_tbl where user_id = '$user_id' ";
	$query_result3 = $link->query($query3);

echo $query6 = "select * from invoice_detail_tbl where invoice_id = '$invoice_id'";
$query_result6 = $link->query($query6);
while($rowss = mysqli_fetch_array($query_result6))
{
	$quantity2 = $rowss['quantity'];
	 $quantity2;
	$product_id = $rowss['product_id'];
	 $query ="select * from product_tbl where product_id='$product_id'";
	$res1 = $link->query($query);
	//if($res1)
	$quantity ="";
	while($row1 = mysqli_fetch_array($res1))
	{
		$quantity=$row1['quantity'];
		$product_id = $row1['product_id'];
		//echo $quantity;
	}
	 $quantity = $quantity-$quantity2;
	 $query4 = " UPDATE product_tbl set quantity = '$quantity' where deleted ='0' and status='0' and product_id = '$product_id'";
	$query_result4 = $link->query($query4);

}


}
?>