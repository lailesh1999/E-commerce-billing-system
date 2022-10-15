<?php

include("dbconnect.php");

?>
<select name="sub_category_id" id="sub_category_id">
	<option>select category</option>
<?php
$category_id = $_GET["cat_id"];
$query = "select * from sub_category_tbl where deleted='0' and status='0' and category_id='$category_id'";
$res = $link->query($query);
while($row = mysqli_fetch_array($res))
{
	$sub_cat_id = $row["sub_category_id"];
	$sub_cat_name = $row["sub_category_name"];
	?>
	<option value="<?php echo $sub_cat_id;?>"><?php echo $sub_cat_name; ?></option>
	<?php
}	
?>
</select>
