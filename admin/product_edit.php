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
		$product_id = $_GET['product_id'];
		


	//$query = " select * from product_tbl where product_id = '$product_id'";
		//$query = " SELECT p.product_name,p.product_description,p.product_code,p.quantity,p.product_price,p.discount,p.selling_price,c.category_name,s.sub_category_name,t.tax_name,t.tax_rate,u.unit_name,c.category_id,s.sub_category_id,u.unit_id,t.tax_id,p.product_id from sub_category_tbl s, category_tbl c,unit_tbl u,tax_tbl t,product_tbl p  where product_id = '$product_id'";
		$query = " SELECT * from product_tbl   where product_id = '$product_id'";
	$query_res = $link->query($query);
	while($rows = mysqli_fetch_array($query_res))
	//foreach($query_res as $rows)
	{
						$product_name = $rows['product_name'];
 						$product_id = $rows['product_id'];
						$product_description =$rows['product_description'];
						$product_code=$rows['product_code'];
						$quantity=$rows['quantity'];
						$product_price = $rows['product_price'];
						$discount=$rows['discount'];
						$selling_price=$rows['selling_price'];
						$category_id=$rows['category_id'];
					    $unit_id=$rows['unit_id'];
						$tax_id=$rows['tax_id'];
						$sub_category_id=$rows['sub_category_id'];
						//$unit_name=$rows['unit_name'];
						//$tax_name=$rows['tax_name'];
						//$tax_rate=$rows['tax_rate'];
						//$category_name=$rows['category_name'];
						//$sub_category_name=$rows['sub_category_name'];



?>

			<div class="card-body" style="width:40%;">
				<div class="form-group">
					<form method="POST" action="update_product_process.php">
						<input type="hidden" name="product_id" value="<?php echo $rows['product_id']; ?>">
						<label>SELECT UNIT</label>
        <select name="unit_id" id="unit_id">
<?php
            $query = "select * from unit_tbl where status ='0' and deleted = '0' ";
            $query_result = $link->query($query);
            while($rows = mysqli_fetch_array($query_result))
            {
              $unid = $rows['unit_id'];
              $unit_name =  $rows['unit_name'];
              ?>
              <option value="<?php echo $unid; ?> " <?php if($unit_id == $unid){ echo "selected" ; }?>> <?php echo $unit_name; ?> </option>
           
            <?php
            }
?>
        </select><br>
						 <label>SELECT TAX NAME</label>
        				<select name="tax_id" onchange="dispTaxRate(this.value)">
        
<?php
            			$query = "select * from tax_tbl where status ='0' and deleted = '0' ";
            			$query_result = $link->query($query);
            			while($rows = mysqli_fetch_array($query_result))
            			{
              					$tax1_id = $rows['tax_id'];
              					$tax_name =  $rows['tax_name'];
              					//$tax_rate = $rows['tax_rate'];
              ?>
              			<option value="<?php echo $tax1_id; ?>" <?php if($tax_id == $tax1_id) { echo "selected";}?>> <?php echo $tax_name; ?> </option>


           
            <?php
            }
?>
	 </select>
	 <br>
         <label>SELECT TAX RATE</label>
        <select name="tax_id"  id="tax_id" >
<?php
           /* $query = "select * from tax_tbl where status ='0' and deleted = '0' ";
            $query_result = $link->query($query);
            while($rows = mysqli_fetch_array($query_result))
            {
              $tax2_id = $rows['tax_id'];
              $tax_rate = $rows['tax_rate'];
              ?>
                <option value="<?php echo $tax2_id; ?> " <?php if($tax_id == $tax2_id) { echo "selected";}?>> <?php echo $tax_rate; ?> </option>

           
            <?php
   
            }   */

?>
-->
        </select><br>
        <label>SELECT CATEGORY</label>
        <select name="category_id" id="category_id" onchange="dispSubCat(this.value)"">
<?php
            $query = "select * from category_tbl where status ='0' and deleted = '0' ";
            $query_result = $link->query($query);
            while($rows = mysqli_fetch_array($query_result))
            {
              $cat_id = $rows['category_id'];
              $category_name =  $rows['category_name'];
              ?>
              <option value="<?php echo $cat_id; ?> " <?php if($cat_id == $category_id){ echo "selected"; }?>> <?php echo $category_name; ?> </option>

           
            <?php
            }
?>
</select><br>
<label>SELECT SUB CATEGORY</label>
        <select name="sub_category_id" id="sub_category_id">
<?php
            $query = "select * from sub_category_tbl where status ='0' and deleted = '0' ";
            $query_result = $link->query($query);
            while($rows = mysqli_fetch_array($query_result))
            {
              $sub_cat_id = $rows['sub_category_id'];
              $sub_category_name =  $rows['sub_category_name'];
              ?>
              <option value="<?php echo $sub_cat_id; ?> " <?php if ($sub_cat_id == $sub_category_id) { echo "selected";
              }?>> <?php echo $sub_category_name; ?> </option>

           
            <?php
            }
?>
        </select><br>
					
    				<label>Enter product name</label>
    				<input type="text" class="form-control"  name="product_name" value="<?php echo $product_name ; ?> "required>
    				<label>Enter product description</label>
    				<input type="text" class="form-control"  name="product_description" value="<?php echo $product_description ; ?> "required>
    				<label>Enter product code</label>
    				<input type="text" class="form-control"  name="product_code" value="<?php echo $product_code ; ?> "required>
    				<label>Enter qunatity</label>
    				<input type="text" class="form-control"  name="quantity" value="<?php echo $quantity ; ?> "required>
    				<label>Enter product price</label>
    				<input type="text" class="form-control" name="product_price" value="<?php echo $product_price ; ?> "       id="price" required>
    				<label>Enter discount</label>
    				<input type="text" class="form-control"  name="discount" value="<?php echo $discount ; ?>" id="discount"  onkeyup="sellPrice()" required>
    				<label>Enter selling price</label>
    				<input type="text" class="form-control"  name="selling_price"     value="<?php echo $selling_price ; ?>"  id="total" required>
  				</div>
  			
 					 <button type="submit" name="updateproduct" class="btn btn-primary">UPDATE PRODUCT</button>
 					 <a href="view_product.php" class="btn btn-secondary">CANCLE</a>
			</div>
		</form>

<?php
}

?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  
function dispSubCat(val)
{
  //alert(val);

   $.ajax({
          type:'GET',
          url:'ajax_sub_cat.php?cat_id='+val,
          //data:"cat_id="+val
          success: function(result){
            //alert(result);
       document.getElementById("sub_category_id").innerHTML = result;


    }});

}

function dispTaxRate(val1)
{
  //alert(val1);
  $.ajax({
   
          type:'GET',
          url:'ajax_tax_rate.php?taxx_id='+val1,
          success: function(result){
            //alert(result);
            document.getElementById("tax_id").innerHTML = result;
          




    }});

}

function sellPrice()  
{
            var numVal1 = Number(document.getElementById("price").value);
            var numVal2 = Number(document.getElementById("discount").value);
            var totalValue = (numVal1 -(numVal2/100)*numVal1);
            document.getElementById("total").value = totalValue.toFixed(2);
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