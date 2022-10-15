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

	if(isset($_GET["from_date"]))
	{
		$from_date = $_GET['from_date'];
	$to_date = $_GET['to_date'];
	}
	else
	{
		$from_date = date('Y-m-d');
	$to_date = date('Y-m-d');
	}
$trans_mode="";
	if(isset($_GET["address"]))
	{
		$trans_mode = $_GET["address"];
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
	  			
			    	   <select name="address_id" id="address" onchange="dispFilter()">       
				  			<option value="">FILTER</option>
				  			<option <?php if($trans_mode =="view_all"){echo "selected";}?> value="view_all">VIEW ALL</option>
				  			<option value="online" <?php if($trans_mode =="online"){echo "selected";} ?>>ONLINE</option>
				  			<option <?php if($trans_mode =="offline"){echo "selected";}?> value="offline">OFFLINE </option>
				  		</select>
				 
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
	//include('includes/footer.php');


	
	 //echo $query1 =" SELECT i.order_no,i.grand_total,c.customer_name,c.customer_address,c.customer_pincode,c.customer_phone_number,i.user_id,i.address_id from invoice_tbl i,customer_tbl c where i.created_date between '2020-12-23' and '2020-12-24' and i.user_id = c.user_id and c.deleted='0' and i.deleted='0' ";
	 $query = "SELECT * from invoice_tbl where date(created_date) >= '$from_date' and date(created_date)<='$to_date' and deleted = '0'";
	 if($trans_mode=="offline")
	{
		$query =$query." and address_id='NO'";
	}
	else if($trans_mode=="online")
	{
		$query =$query." and address_id!='NO'";
	}

	$query_res = $link->query($query);
?>
<div style="padding: 5%"> 
<div id="filter">
<table class="table table-bordered" style="width: 100%;" id="datatable">
	<tr><th>CUSTOMER NAME</th>
		<th>ORDER NO</th>
		<th>GRAND TOTAL</th>
		<th>ADDRESS</th>
		<TH>PHONE NUMBER</TH>
		<TH>PINCODE</TH>
		<th>MODE OF PURCHASE</th>
		<th>print</th>
	
	</tr>
<?php
if (mysqli_num_rows($query_res) > 0) 
{
 while($row = mysqli_fetch_array($query_res))
 {
 	$order_no = $row['order_no'];
 	$invoice_id = $row['invoice_id'];
 	$grand_total = $row['grand_total'];
 	$address_id = $row['address_id'];
 	$user_id = $row['user_id'];
 	$mode = '<b style="color:red;">OFFLINE</b>';
 	/*$customer_name = $row['customer_name'];
 	$customer_address = $row['customer_address'];
 	$customer_phone_number = $row['customer_phone_number'];
 	$customer_pincode = $row['customer_pincode'];*/
 	//$user_id = $row['user_id'];
 	if($address_id != 'NO')
 	{
 	 $query1 = "SELECT a.address,a.pincode,u.username,a.name,a.mobile_number,a.pincode from register_tbl u,address_tbl a where a.user_id=u.user_id and address_id = '$address_id' ";
 		$query_result1 = $link->query($query1);
 		while($r = mysqli_fetch_array($query_result1))
 		{
 			$address = $r['address'];
 			$name =$r['name'];
 			$phone_number=$r['mobile_number'];
 			$pincode=$r['pincode'];
 			$mode = '<B style="color:green;">ONLINE</B>';
 		}
 	}
 	else
 	{
 		$query_customer =  "SELECT * from customer_tbl where user_id = '$user_id' and deleted='0' ";
 	$query_result = $link->query($query_customer);
 	while($r = mysqli_fetch_array($query_result))
 	{
 		$name = $r['customer_name'];
 		$address = $r['customer_address'];
 		$phone_number = $r['customer_phone_number'];
 		$pincode = $r['customer_pincode'];
 	}
 	}
 	?>
 	<tr>
 		<td><?php echo $name; ?></td>
 		<td><?php echo $order_no; ?></td>
 		<td><?php echo $grand_total; ?></td>
 		<td><?php echo $address; ?></td>
 		<td><?php echo $phone_number; ?></td>
 		<td><?php echo $pincode; ?></td>
 		<td><?php echo $mode; ?></td>
 		<td><a href="print.php?invoice_id=<?php echo $invoice_id; ?>">PRINT</a></td>

 	</tr>
 	<?php
 }




?>



</table>
<input type="submit" name="name"  value="print" class="btn btn-primary">
<a href="view_bill.php">cancel</a>
<?php
}
else
{
	echo "NO records found";
}
	
?>

<script type="text/javascript">
	function printFile()
	{
		window.print();
	}


	function dispReport()
	{
		var from_date = document.getElementById("fdate").value;
		var to_date  = document.getElementById("tdate").value;
		var val = document.getElementById("address").value;
		//alert(val);
		window.location = "view_bill.php?from_date="+from_date+"&to_date="+to_date+"&address="+val;
	}
</script>







</div>
<?php
include('includes/script.php');
?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#datatable').DataTable();
} );
</script>
</body>
</html>