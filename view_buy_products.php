<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<?php
include('dbconnect.php');
$product_id = $_GET['product_id'];
$product_img_id = $_GET['product_img_id'];
$query = " SELECT   p.product_name,p.product_code,p.product_description,p.product_code,p.quantity,p.discount,p.selling_price,i.product_img,p.product_id,i.product_img_id from product_img_tbl i,product_tbl p where p.product_id = i.product_id  and  i.deleted = '0' and i.product_id='$product_id' and p.deleted='0'";
$query_result = $link->query($query);

 	 			while($rows = mysqli_fetch_array($query_result))
 	 			{
 	 					$product_name = $rows['product_name'];
 	 					$product_img=$rows['product_img'];
						$product_description =$rows['product_description'];
						$product_code=$rows['product_code'];
						$quantity=$rows['quantity'];
						$discount=$rows['discount'];
						$selling_price=$rows['selling_price'];
					?>
 		<div style="padding: 20px">	<div style="padding-left:20px;border: 2px solid blue;width: 30%;height: 100%;"><table ><tr><td style="width:150px;" colspan="2"></td></tr>
 				<img src="admin/product_img/<?php echo $product_img;?>" width="100" height="100" /></td><td>
 				<?php echo "<b> $product_name</b>"; ?><br>
 				<?php echo " $product_description"; ?><br>
 				<?php echo " AVAILABLE QUANTITY: &nbsp $quantity"; ?><br>
 				 <?php echo "PRODUCT CODE : &nbsp$product_code"; ?><br>
 				<?php echo " $discount &nbsp%0FF"; ?><br>
 				<?php echo " <b>	RS $selling_price </b>"; ?></td></tr><tr><td style="text-align: center;"><br><!--<a href="view_buy_products.php?product_id=<?php echo $rows['product_id']; ?>&product_img_id=<?php echo $rows['product_img_id']; ?>"class = "btn btn-secondary btn-sm">buy now !!!</a>-->&nbsp<a href="index.php" class="btn btn-primary btn-sm">cancel</a><br>	
 			<br></tr><br></table></div><br></td></tr>
 			</table></div>

</tr>
	</div>
<?php 
 					}
				




?>


</body>
</html>