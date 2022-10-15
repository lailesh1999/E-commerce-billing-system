<!DOCTYPE html>
<html>
<head>
	<title></title>
	<title>bookstore</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
	<h3 style="text-align: center;">Invoice detail</h3>
<?php
include('dbconnect.php');
$invoice_id = $_GET['invoice_id'];
   $query = " SELECT i.order_no,i.created_date,a.address,a.pincode,a.state,a.city,a.land_mark,a.name,a.mobile_number,i.invoice_id from address_tbl a,invoice_tbl i where i.address_id = a.address_id and a.deleted='0' and a.status='0' and i.deleted='0'and i.invoice_id = '$invoice_id' ";
$query_result=$link->query($query);
while($rows=mysqli_fetch_array($query_result))
{
			$order_no=$rows['order_no'];
			$created_date=$rows['created_date'];
			$address=$rows['address'];
			$pincode=$rows['pincode'];
			$state=$rows['state'];
			$city=$rows['city'];
			$land_mark=$rows['land_mark'];
			$name=$rows['name'];
			$mobile_number=$rows['mobile_number'];
			$invoice_id=$rows['invoice_id'];
		?><div style="border: 3px solid black;height: 600px;width:1200px;padding-left: 3%;padding-top: 1%;">
			<table class="table table-borderless"><tr><td rowspan="3">
			<b>ORDER NO:</b>&nbsp&nbsp&nbsp&nbsp<?php echo "$order_no"; ?><br>
			<b>OREDERED DATE:</b>&nbsp&nbsp&nbsp<?php echo "$created_date";?><br>
			<b>INVOICE DATE:</b>&nbsp&nbsp<?php echo "$created_date";?><br>
</td><td rowspan="3"><b >Billing address</b><br>


<b ><?php echo "$name"; ?></b><br>
			<?php echo "$address"; ?>,<br>
			<?php echo "$city"; ?>,
			<?php echo "$land_mark"; ?>,<br>
			<?php echo "$pincode"; ?><br>
			<?php echo "$state"; ?>
			<?php echo "$mobile_number"; ?>
		

</td>
</td><td rowspan="3"><b >Shipping  address</b><br>


<b><?php echo "$name"; ?></b><br>
			<?php echo "$address"; ?>,<br>
			<?php echo "$city"; ?>,
			<?php echo "$land_mark"; ?>,<br>
			<?php echo "$pincode"; ?><br>
			<?php echo "$state"; ?>
			<?php echo "$mobile_number"; ?>

</td></tr></table>
<hr>
<?php
}
    $query = " SELECT p.product_name,p.discount,p.product_description,id.quantity,id.price,i.invoice_id,id.invoice_detail_id from invoice_tbl i,product_tbl p,invoice_detail_tbl id where id.product_id = p.product_id and id.invoice_id = i.invoice_id and id.invoice_id='$invoice_id'";
 $query_run = $link->query($query);
 $grand_total = 0;
 $total_quantity = 0;

?>
<table class="table table-borderless" style="width: 100%;">
 			<thead><tr><th>PRODUCT NAME</th>
 						<th>PRODUCT DESCRIPTION</th>
 						 <th style="text-align: center;">QUANTITY</th>
 			 			<th>PRICE</th>
 						<th>DISCOUNT</th>
 						<th>TOTAL PRICE</th><hr>
 						</tr>

<?php
 while($row = mysqli_fetch_array($query_run))
 {
 	$product_name = $row['product_name'];
 	$discount=$row['discount'];
 	$product_description = $row['product_description'];
 	$quantity=$row['quantity'];
 	$price=$row['price'];
 	$total_price = $quantity * $price;
 	$total_quantity = $total_quantity + $quantity;
 	$grand_total = $grand_total + $total_price;
 	?>
<tr><td> <?php echo " $product_name"; ?></td>
				<td> <?php echo "$product_description "; ?></td>
				<td style="text-align: center;"> <?php echo "$quantity "; ?></td>
				<td> <?php echo "$price "; ?></td>
				<td> <?php echo " $discount"; ?>%</td>
				<td> <?php echo " $total_price"; ?></td>
		<?php
 }

?>
 				</tr>
 				<td  style="padding-left: 2%;"></td>  <td></td><td><b>TOTAL QUANTITY:&nbsp</b><?php echo $total_quantity; ?></td><td colspan="1"> </td><td colspan="2"><b>GRAND-TOTAL:&nbsp</b><?php echo $grand_total; ?></td>


</div>

<script type="text/javascript">
	window.print();
	//window.locattion = "order_detail1.php?invoice_id=<?php echo $invoice_id; ?>"; 
</script>
</body>
</html>