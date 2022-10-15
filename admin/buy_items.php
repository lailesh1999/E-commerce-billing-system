
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php

		include('includes/stylesheet.php');
		include('dbconnect.php');
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
<h1><center>INVOICE</center>     </h1>
<form method="POST" action="bill_process.php">
<div class="form_control" style="padding: 6%">
<?php
$order_no = rand(1000000,10000000); 
?>


<b>RECIPT NO:</b><input type="text" name="order_no" class="form_control" value="<?php echo $order_no; ?>">
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <?php 
$month = date('m');
$day = date('d');
$year = date('Y');

 $today = $year . '-' . $month . '-' . $day;
?> 
<b>DATE:</b><input type="date" name="date"  id="date" class="form_control" value="<?php echo $today; ?>" disabled>
<?php
date_default_timezone_set("Asia/Kolkata");
$time = date("h:i:sa");
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<b>TIME:</b><input type="text" name="time" class="form_control" value="<?php echo $time; ?>" disabled><br><br>

<b>CUSTOMER NAME </b>
<select name="user_id" id="customer_id" onchange="dispContact(this.value)">
	<option value="">-CUSTOMER NAME-</option>
<?php
$query = "SELECT * from customer_tbl where deleted='0' and status='0'";
$query_run = $link->query($query);
while($rows = mysqli_fetch_array($query_run))
{
	$customer_name = $rows['customer_name'];
	$user_id = $rows['user_id'];

?>
<option name="user_id" value="<?php echo $user_id; ?>"><?php echo $customer_name; ?></option>


<?php
}
?>

	
</select >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>CONTACT:</b><input type="text" name="" class="form_control"  id="contact" disabled required>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="add_customer.php" class="btn btn-primary">ADD CUSTOMER</a>
<br><br>
<div id="dataTable">
<div class="row">
	<div class="col-sm-1"><b>CODE</b></div>&nbsp;
    <div class="col-sm-2" ><b>PRODUCT</b></div>&nbsp;
    <div class="col-sm-1" ><b>QTY</b></div>&nbsp;&nbsp;
    <div class="col-sm-1"><b>PRICE</b></div>&nbsp;
    <div class="col-sm-1"><b>TOTAL</b></div>&nbsp;
</div><br>

<div class="row">		
		<div class="col-sm-1"><input type="text" name="product_code[]" class="form_control"  size="5" onblur="proCode(this.value,'1')" required></div>
		<div class="col-sm-2">	<input type="text" name="product[]" class="form_control"  id="product1"  size="14" ></div>
		<div class="col-sm-1">	<input type="number"style="width: 5em" name="quantity[]" class="form_control" value="1" id="quantity1" onclick="proCode2(this.value,'1')" size="5"  min="0"></div>
		<div class="col-sm-1">	<input type="text" name="price[]" class="form_control" id="price1" value="" size="5" required></div>
		<div class="col-sm-1">	<input type="text" name="total[]" id="total1" class="form_control" value="" size="5" ></div>
		<div class="col-sm-1">	<input type="hidden" name="slno[]" id="slno" class="form_control" value="1" size="2" ></div>
		
	
</div><br>

	
	<div id="addedRows"></div>
</div>
	<b style="padding-left: 62%;">GRAND TOTAL:<input type="text" name="grand_total" id="gtotal1" class="form_control" value="" size="9" ></b><br><br>

	<button type="button"   name="rows" class="btn btn-primary" onclick="addRow('dataTable')" style="cursor: pointer;">ADD ROWS</button>
	<!--<button type="button"  id="gt" name="gtotal" class="btn btn-secondary" onclick="grandTotal()" >GRAND TOATL</button>-->
<!--	<input type="button"  name="rows" value="DELETE ROW " class="btn btn-danger" onclick="deleteRow('dataTable')" data-bs-toggle="tooltip" data-bs-placement="bottom" title="SELECT ROWS TO DELETE">-->
</div>

<div>
	

<center><input type="submit" name="bill" value="bill" class="btn btn-success"></center>

</form>
<?php
	//include('includes/footer.php');
?>


</div>
<?php
include('includes/script.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
	var rowCount = 1;
	function addRow(dataTable1) {
	//alert(dataTable1);
	rowCount ++;
	var recRow= '<div id="row'+rowCount+'"><div class="row"><div class="col-sm-1"><input type="text" name="product_code[]" class="form_control"  size="5" onblur="proCode(this.value,'+rowCount+')" required></div><div class="col-sm-2"><input type="text" name="product[]" class="form_control"  id="product'+rowCount+'"  size="14" ></div> <div class="col-sm-1"> <input type="number"style="width: 5em" name="quantity[]" class="form_control" value="1" id="quantity'+rowCount+'" onclick="proCode2(this.value,'+rowCount+')" size="5" min="0" ></div> <div class="col-sm-1"><input type="text" name="price[]" class="form_control" id="price'+rowCount+'" value="" size="5" required></div><div class="col-sm-1"><input type="text" name="total[]" id="total'+rowCount+'" class="form_control" value="" size="5" ></div><input type="hidden" name="slno[]" id="slno" class="form_control" value='+rowCount+' size="2" ><p><div class="col-sm-1"> <button type="button" name="name" onclick="removeRow('+rowCount+');">Delete </button></div> </p></div></div><br>';
jQuery('#addedRows').append(recRow);
}
function removeRow(rCount) {

	//alert(rCount);
//jQuery('#rowCount'+removeNum).remove();
document.getElementById("row"+rCount).remove();
}

function proCode(val1,rCount)
{
  //alert(val1);
  $.ajax({
   
          type:'GET',
          url:'ajax_rows.php?proid='+val1,
          success: function(result){
            //alert(result);
            var res =result.split("~");
            //alert(res[1]);
           document.getElementById("product"+rCount).value = res[0];
           document.getElementById("price"+rCount).value = res[1];
           var numVal1 = Number(document.getElementById("price"+rCount).value);
            var numVal2 = Number(document.getElementById("quantity"+rCount).value);
             

            var totalCost = (numVal2)  * (numVal1);
            //alert(totalCost);
             document.getElementById("total"+rCount).value = totalCost;

             var totalCost = document.getElementsByName('total[]');
			var grandTotal = 0;
			for (var i = 0; i < totalCost.length; i++){
				var a = totalCost[i];
				//alert(a.value); 
			var grandTotal = parseInt(grandTotal) + parseInt(a.value);
			
         }
         //alert(grandTotal);
         document.getElementById("gtotal1").value = Number(grandTotal);
             
    }});

}

function grandTotal()
{
			var totalCost = document.getElementsByName('total[]');
			var grandTotal = 0;
			for (var i = 0; i < totalCost.length; i++){
				var a = totalCost[i];
				//alert(a.value); 
			var grandTotal = parseInt(grandTotal) + parseInt(a.value);
			
         }
         //alert(grandTotal);
         document.getElementById("gtotal1").value = Number(grandTotal);
			 
}




function proCode2(val1,rCount)
{
  //alert(val1)
           var numVal1 = Number(document.getElementById("price"+rCount).value);
            var numVal2 = Number(document.getElementById("quantity"+rCount).value);
            var totalCost = (numVal2)  * (numVal1);
             document.getElementById("total"+rCount).value = totalCost;
            /* var grandTotal = 0;
             var grandTotal = (grandTotal) + (totalCost);
             document.getElementById("gtotal1").value = grandTotal;*/
             var totalCost = document.getElementsByName('total[]');
			var grandTotal = 0;
			for (var i = 0; i < totalCost.length; i++){
				var a = totalCost[i];
				//alert(a.value); 
			var grandTotal = parseInt(grandTotal) + parseInt(a.value);
			
         }
         //alert(grandTotal);
         document.getElementById("gtotal1").value = Number(grandTotal);
        
}

function dispContact(val1)
{
  //alert(val1);
  $.ajax({
   
          type:'GET',
          url:'ajax_contact.php?cust_id='+val1,
          success: function(result){
            //alert(result);
            var res =result.split(" ");
            document.getElementById("contact").value = res[0];
            
    }});

}

</script>

</body>
</html>
