<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<?php

		include('includes/stylesheet.php');
	?>
</head>
<body>
<?php

		include('includes/sidenav.php');
?>
<div class="main-content" id="panel">
<?php
	

	include('includes/topnav.php');
	//include('includes/header.php');
?>

<?php
include('dbconnect.php');
$product_id=$_GET['product_id'];
$query="SELECT p.product_name,i.product_img,p.product_id,i.product_img_id from product_tbl p ,product_img_tbl i where p.product_id=i.product_id and i.product_id='$product_id' and i.deleted = '0' and p.deleted = '0'";
$query_run = $link->query($query);
?>
<div style="padding: 2%;">
 	<table class="table table-bordered" style="width: 50%;">
 			<thead><tr><th>PRODUCT ID</th>
 						<th>PRODUCT NAME</th>
 						<th>PRODUCT IMAGE</th>
 						<th>DELETE</th>
 <?php
 		while($rows=mysqli_fetch_array($query_run))
 		{
 			$product_name = $rows['product_name'];
 			$product_id=$rows['product_id'];
 			$product_img_id=$rows['product_img_id'];
 			$product_img=$rows['product_img'];

 	

    ?>
 			<tr><td><?php echo $product_id; ?></td>
 				<td><?php echo $product_name; ?></td>
 			<td><img src="product_img/<?php echo $product_img;?>" width="100" height="100" /></td>
 			<td><a onclick="delete_data('<?php echo $product_id; ?>','<?php echo $product_img_id; ?>')" >delete</a></tr>
			

 			<?php


}
?>
<a href="add_new_img.php?product_id=<?php echo $product_id; ?>"> ADD NEW IMAGE</a><br>
 			
 			<a href="view_product.php">cancel</a>

<script type="text/javascript">
	function delete_data(id1,product_img_id)
	{
		//alert(id1);
		var res = confirm("are you sure you want to delete");
		//alert(res);
		if(res)
		{
			window.location="delete_img.php?product_id="+id1+"&product_img_id="+product_img_id;
		}
		else
		{
			//alert("cancel");
			//return;
		}



	}
</script>
<?php
	//include('includes/footer.php');
?>


</div>
<?php
include('includes/script.php');
?>
</body>
</html>