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
<div class="card-body"n style="padding: 1%;">
  <div class="shadow-lg p-3 mb-5 bg-white rounded border border-dark" style="width:29rem;">
<div class="card" style="width: 26rem;background-color:lightblue;color:black;">
	<form method="POST" action="add_product_process.php" enctype="multipart/form-data">

  		<div class="card-body">
			<div class="form-group">

        <label>SELECT UNIT</label>
        <select name="unit_id" id="unit_id">
            <option value="">-SELECT UNIT-</option>
<?php
            include('dbconnect.php');
            $query = "select * from unit_tbl where status ='0' and deleted = '0' ";
            $query_result = $link->query($query);
            while($rows = mysqli_fetch_array($query_result))
            {
              $unit_id = $rows['unit_id'];
              $unit_name =  $rows['unit_name'];
              ?>
              <option value="<?php echo $unit_id; ?> "> <?php echo $unit_name; ?> </option>
           
               <?php
            }
            
?>
        </select><br>
        <label>SELECT TAX NAME</label>
        <select name="tax_id"  onchange="dispTaxRate(this.value)">
        <option value="">-SELECT TAX NAME-</option>
<?php
            include('dbconnect.php');
            $query = "select * from tax_tbl where status ='0' and deleted = '0' ";
            $query_result = $link->query($query);
            while($rows = mysqli_fetch_array($query_result))
            {
              $tax_id = $rows['tax_id'];
              $tax_name =  $rows['tax_name'];
              $tax_rate = $rows['tax_rate'];
              ?>
              <option value="<?php echo $tax_id; ?> "> <?php echo $tax_name; ?> </option>

           
            <?php
            }
?>
        </select><br>
         <label>SELECT TAX RATE</label>
        <select name="tax_id" id="tax_id">
<?php /*
            include('dbconnect.php');
            $query = "select * from tax_tbl where status ='0' and deleted = '0' ";
            $query_result = $link->query($query);
            while($rows = mysqli_fetch_array($query_result))
            {
              $tax_id = $rows['tax_id'];
              $tax_rate = $rows['tax_rate'];
              ?>
                <option value="<?php echo $tax_id; ?> "> <?php echo $tax_rate; ?> </option>

           
            <?php
            }
            */
?>
        </select><br>
 <label>SELECT CATEGORY</label>
        <select name="category_id" id="category_id" onchange="dispSubCat(this.value)">
        <option value="" >-SELECT CATEGORY-</option>
<?php
            $query = "select * from category_tbl where status ='0' and deleted = '0' ";
            $query_result = $link->query($query);
            while($rows = mysqli_fetch_array($query_result))
            {
              $category_id = $rows['category_id'];
              $category_name =  $rows['category_name'];
              ?>
              <option value="<?php echo $category_id; ?> "> <?php echo $category_name; ?> </option>

           
            <?php
            }
?>
        </select><br>
         <label>SELECT SUB CATEGORY</label>
        <select name="sub_category_id" id="sub_category_id">
        
        </select><br>



				<label>ENTER PRODUCT NAME</label>
    				<input type="text" class="form-control"  name="product_name" required>
            <label>ENTER PRODUCT DESCRIPTION</label>
            <input type="text" class="form-control"  name="product_description" required>
  			    <label>ENTER PRODUCT CODE</label>
            <input type="text" class="form-control"  name="product_code" required>
             <label>ENTER quantity</label>
            <input type="text" class="form-control"  name="quantity" required>
            <label>ENTER product price</label>
            <input type="text" class="form-control"  name="product_price"  id="price" required>
            <label>ENTER discount</label>
            <input type="text" class="form-control"  name="discount" onkeyup="sellPrice(this.value)" id="discount" required>
            <div id="dis" style="color:red;"></div>
            <label>ENTER selling price</label>
            <input type="text" class="form-control"  name="selling_price"  id="total"  required><br>
 					 <button type="submit" name="addproduct" id="submit" class="btn btn-primary" disabled>ADD PRODUCT</button>
           <input type="reset" class="btn btn-primary" />&nbsp<a href="index.php" class="btn btn-secondary">CANCEL</a>
           <br>
           </div>
           </div>
        
		</div>
</center>	</div>
</form></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  
function dispSubCat(val)
{
  alert(val);

   $.ajax({
          type:'GET',
          url:'ajax_sub_cat.php?cat_id='+val,
          //data:"cat_id="+val
          success: function(result){
            alert(result);
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

function sellPrice(val2)
{
            var bt = document.getElementById("submit");
            var numVal1 = Number(document.getElementById("price").value);
            var numVal2 = Number(document.getElementById("discount").value);
            var totalValue = (numVal1 -(numVal2/100)*numVal1);
            document.getElementById("total").value = totalValue.toFixed(2);
            if(numVal2 > 100)
            {
              var b ="discount should not exceed above 100%";
              document.getElementById('dis').innerHTML = b;
              //return false;
              bt.disabled = true;
            }
              else
              {
                //return true;
                bt.disabled = false;
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