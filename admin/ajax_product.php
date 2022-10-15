<?php

include("dbconnect.php");

?>
<select name="product_id" id="product_id">
	<option>select product</option>
<?php
$sub_category_id = $_GET["pro_id"];
$query = "select * from  product_tbl where deleted='0' and status='0' and sub_category_id='$sub_category_id'";
$res = $link->query($query);
while($row = mysqli_fetch_array($res))
{
	$pro_id = $row["product_id"];
	$pro_name = $row["product_name"];
	?>
	<option value="<?php echo $pro_id;?>" ><?php echo $pro_name; ?></option>
	<?php
}	
?>
</select>
