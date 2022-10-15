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
<?php
include('dbconnect.php');
$invoice_id=$_GET['invoice_id'];
  $query="SELECT p.product_name,id.quantity,id.price,i.invoice_id,i.grand_total,id.product_id from product_tbl p,invoice_tbl i,invoice_detail_tbl id where id.product_id = p.product_id and id.invoice_id = i.invoice_id and i.deleted= '0' and p.deleted='0' and i.invoice_id='$invoice_id'";
$query_result = $link->query($query);
while($rows= mysqli_fetch_array($query_result))
{
	$product_name = $rows['product_name'];
	$quantity=$rows['quantity'];
	$price = $rows['price'];
	$invoice_id =$rows['invoice_id'];
	$grand_total = $rows['grand_total'];
	$product_id=$rows['product_id'];
	//echo $img_query = "SELECT product_img.im,product_id.im,product_img_id.im,id.invoice_id from product_img_tbl im,product_tbl p,invoice_detail_tbl i,where deleted='0' and status='0' and pm.product_id = p.product_id";
	$product_img = "";
	$img_query="SELECT * from product_img_tbl where deleted='0' and product_id='$product_id'";
	$query_run = $link->query($img_query);
	while($row = mysqli_fetch_array($query_run))
	{
		 $product_img = $row['product_img'];
		break;
	}
	?>
	<div style="padding: 20px">	<div style="padding-left:20px;border: 2px solid blue;width: 30%;height:100%;">
		<img src="admin/product_img/<?php echo $product_img;?>" width="100" height="100" />
	<b>PRODUCT NAME:<?php echo $product_name;?></b><br>
	<b>QUANTITY:<?php echo $quantity;?></b><br>
	<b> PRICE:<?php echo $price;?></b><br>

	</div></div>
	<?php
}
?>
<b> total :<?php echo $grand_total;?></b>
<a href="view_invoice.php?invoice_id=<?php   echo $invoice_id; ?>">VIEW INVOICE</a>
</body>
</html>