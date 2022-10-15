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
if(isset($_GET['from_date']))
{
	$from_date = $_GET['from_date'];
	$to_date = $_GET['to_date'];
}
else
{
	$from_date = date('Y-m-d');
	$to_date = date('Y-m-d');
}

?>

<div class="container">
		<div class="row">
			<div class="col-md-10 mx-auto">
				<div class="card" style="box-shadow:0 0 25px 0 lightgrey;">
				  <div class="card-header">
				   	<h4>Generate Report</h4>
				  </div>
				  <div class="card-body">
				  	<form >
				  		<div class="form-group row">
				  			<label class="col-sm-3 col-form-label" align="right">From date</label>
				  			<div class="col-sm-6">
				  				<input type="date"  name="from_date" value="<?php echo $from_date; ?>" class="form-control form-control-sm" id="fdate" >
				  			</div>
				  		</div>
				  		<div class="form-group row">
				  			<label class="col-sm-3 col-form-label" align="right">To date</label>
				  			<div class="col-sm-6">
				  				<input type="date"  name="to_date" value="<?php echo $to_date; ?>" class="form-control form-control-sm" id="tdate">
				  			</div>
				  		</div>

			  		<center>
	                      <input type="button" name="report"  style="width:150px;" class="btn btn-info" value="Display Report" onclick="dispReport()">
	                    </center> <br/>
	                 </form> 
	             </div>
	        </div>
	     </div> 
	</div>
</div>
<?php
	
	  $query = "SELECT b.quantity,b.purchase_price,b.total_price,b.invoice_number,p.product_name,s.supplier_name,b.buy_supplier_id from buy_supplier_tbl b,product_tbl p,supplier_tbl s where b.product_id = p.product_id  and b.supplier_id = s.supplier_id and p.deleted='0' and b.deleted='0' and s.deleted='0' and date(b.created_date) >= '$from_date' and date(b.created_date)<='$to_date'";
	$query_res = $link->query($query);
?>
	<div style="padding: 5%"> 

		<table class="table table-bordered" style="width: 100%;" id="datatable">
			<tr><th>SUPPLIER NAME</th>
				<th>PRODUCT NAME</th>
				<th>INVOICE NUMBER</th>
				<th>QUANTITY </th>
				<th>PURCHASE PRICE </th>
				<th>TOTAL PRICE </th>
			</tr>
			<?php
			$grand_total = 0;
if (mysqli_num_rows($query_res) > 0) 
{
 while($row = mysqli_fetch_array($query_res))
 {
 	$supplier_name = $row['supplier_name'];
 	$product_name = $row['product_name'];
 	$invoice_number = $row['invoice_number'];
 	$total_price =$row['total_price'];
 	$quantity = $row['quantity'];
 	$purchase_price = $row['purchase_price'];
 	$grand_total = $grand_total + $total_price;
 	?>
 	<tr>
 		<td><?php echo $supplier_name; ?></td>
 		<td><?php echo $product_name; ?></td>
 		<td><?php echo $invoice_number; ?></td>
 		<td><?php echo $quantity; ?></td>
 		<td><?php echo $purchase_price; ?></td>
 		<td><?php echo $total_price; ?></td>
 	</tr>

 <?php	

}
}
else
{
	echo "no records found";
}
?>

</table>
<b style="color: red;padding-left: 80%;">GRAND TOTAL: <?php echo $grand_total; ?></b>















</div>
<?php
include('includes/script.php');
?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	function dispReport()
	{
		var from_date = document.getElementById("fdate").value;
		var to_date  = document.getElementById("tdate").value;
		window.location = "view_supplier_report.php?from_date="+from_date+"&to_date="+to_date;
	}


$(document).ready(function() {
    $('#datatable').DataTable();
} );
</script>
</body>
</html>