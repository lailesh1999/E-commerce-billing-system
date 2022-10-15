<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Toys Shop an Ecommerce Category Bootstrap Responsive Web Template | Home :: w3layouts</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Toys Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!--Shoping cart-->
      <link rel="stylesheet" href="css/shop.css" type="text/css" />
      <!--//Shoping cart-->
      <!--checkout-->
      <link rel="stylesheet" type="text/css" href="css/checkout.css">
      <!--//checkout-->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
      <?php
include('dbconnect.php');
session_start();
$user_id = $_SESSION['user_id'];


      ?>
   </head>
   <body>
    <?php
    include('header1.php');


    ?>
      <!--headder-->
         <!--//headder-->
         <!-- banner -->
         <div class="inner_page-banner one-img">
         </div>
         <!-- short -->
         <div class="using-border py-3">
            <div class="inner_breadcrumb  ml-4">
               <ul class="short_ls">
                  <li>
                     <a href="index.html">Home</a>
                     <span>/ /</span>
                  </li>
                  <li>Checkout</li>
               </ul>
            </div>
         </div>
         <!-- //short-->
         <!--Checkout-->  
         <!-- //banner -->
         <!-- top Products -->
         <section class="checkout py-lg-4 py-md-3 py-sm-3 py-3">
            <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
               <div class="shop_inner_inf">
                  <div class="privacy about">
                     <h3>Chec<span>kout</span></h3>
                     <div class="checkout-right">
                        
<form method="POST" action="place_order_process.php">
<?php

  $query= "SELECT p.product_name,p.selling_price,c.quantity,p.product_id,p.product_description,c.cart_id from product_tbl p,ajax_cart_tbl c where c.product_id = p.product_id and c.user_id = '$user_id' and c.deleted = '0' and p.deleted = '0'";
$query_run = $link->query($query);


?>

                        <table class="timetable_sub" style="width:1100px;height: auto;">
                           <thead>
                              <tr>
                                 <th>Product Name</th>
                                 <th>Product description</th>
                                 <th>Quantity</th>
                                 <th>Price</th>
                                 <th>TOTAL</th>
                                 <th>Remove</th>
                              </tr>
                           </thead>
                           <tbody>
    <?php
    $grand_total = 0;
    $total_quantity = 0;
if (mysqli_num_rows($query_run) > 0) 
{
while($rows = mysqli_fetch_array($query_run))
{
  $product_id = $rows['product_id'];
  $cart_id=$rows['cart_id'];
  $product_name=$rows['product_name'];
  $quantity=$rows['quantity'];
  $product_description = $rows['product_description'];
  $selling_price=$rows['selling_price'];
  $total_price = $quantity * $selling_price;
  $total_quantity = $total_quantity + $quantity;
  $grand_total = $grand_total + $total_price;
?>
<!--
<tr><td> <?php echo " $product_name"; ?></td>
  <td><?php echo "$product_description"; ?></td>

        <td>

          <button type="button" name="submit" id="button1" class="btn btn-sm" onclick= "addtocart_plus(<?php echo $product_id; ?>)" ><i class='fas fa-plus' style='font-size:10px'></i></button>
         <input type="text" name="quantity" id="quantity<?php echo $product_id; ?>" value="<?php echo $quantity; ?>" size="1px">
            <button class="btn btn-sm"><i class='fas fa-minus'onclick="addtocart_minus(<?php echo $product_id; ?>)" style='font-size:10px'></i></button><br><br>


          </td>
        <td width="20%"><?php echo " $selling_price";?></td>
        <td><?php echo "$total_price" ?></td>
        <td><a  href="cart_remove.php?cart_id=<?php echo $cart_id; ?> " class="btn btn-primary">REMOVE</a> 

        </td>

      </tr>

</div>


<td  style="padding-left: 2%;"></td>  <td></td><td><b>TOTAL QUANTITY:&nbsp</b><?php echo $total_quantity; ?></td><td colspan="1"> </td><td colspan="2"><b>GRAND-TOTAL:&nbsp</b><?php echo $grand_total; ?></td></table>

<a href="index.php">cancel</a> <b style="padding-left: 50%"><a href="place_order.php"class="btn btn-success">CHECK NOW!! </a></b>

-->


   <tr class="rem1">
      <td class="invert"><?php echo " $product_name"; ?></td>
       <td class="invert-image"><!--<a href="single.html"><img src="images/f1.jpg" alt=" " class="img-responsive"></a>--><?php echo "$product_description"; ?></td>
        <td class="invert">                                  
            
             <button class="btn btn-sm"  onclick="addtocart_minus(<?php echo $product_id; ?>)"> <h4>-</h4></button>

            <input type="text" name="quantity" id="quantity<?php echo $product_id; ?>" value="<?php echo $quantity; ?>" size="1px" disabled>
            <button type="button" name="submit" id="button1" class="btn btn-sm" onclick= "addtocart_plus(<?php echo $product_id; ?>)" ><h4>+</h4></button>


         </td>
         <td class="invert"><?php echo " $selling_price";?><br><br><br></td>
         <td class="invert"><?php echo "$total_price" ?></td>
          <td class="invert">                
               <a  href="cart_remove.php?cart_id=<?php echo $cart_id; ?> " class="btn btn btn-outline-danger"><b>X</b></a>

         </td>
         </tr>
<?php
}
}else
{
      echo "YOUR CART IS EMPTY";
}
?>
         <td  style="padding-left: 2%;"></td>  <td></td><td><b>TOTAL QUANTITY:&nbsp</b><?php echo $total_quantity; ?></td><td colspan="1"> </td><td colspan="2"><b>GRAND-TOTAL:&nbsp</b><?php echo $grand_total; ?></td></table>

        <!-- <a href="index.php">cancel</a> <b style="padding-left: 50%"><a href="place_order.php"class="btn btn-success">CHECK NOW!! </a></b> -->
                           </tbody>
                        </table>
                     </div>

<?php

  $query= "SELECT p.product_name,p.selling_price,p.product_id,c.quantity,c.cart_id from product_tbl p,ajax_cart_tbl c where c.product_id = p.product_id and c.user_id = '$user_id' and c.deleted = '0' and p.deleted = '0'";
$query_run = $link->query($query);
?>

            <div class="checkout-left">
                        <div class="col-md-4 checkout-left-basket">
                          <a href="product.php">
                           <h4>Continue to basket</h4></a>

<?php
   $total_quantity = 0;
    $grand_total = 0;
while($rows = mysqli_fetch_array($query_run))
{
  $product_id = $rows['product_id'];
  $cart_id=$rows['cart_id'];
  $product_name=$rows['product_name'];
  $quantity = $rows['quantity'];
  $selling_price=$rows['selling_price'];
  $total_quantity = $total_quantity + $quantity;
  $total_price = $quantity * $selling_price;
  $grand_total = $grand_total + $total_price;
?>                
                     
                           <ul>
                              <li><?php echo " $product_name"; ?> <i></i> <span><?php echo " $selling_price";?></span></li>
   <?php

}

?>
<hr>
                              <li><b style="color:black;">GRAND TOTAL <i></i> <span><?php echo $grand_total; ?></span></li></b>
                              <hr>
                           </ul>
                        </div>











                        <div class="col-md-8 address_form">
                           <h4>Add a new Details</h4>
<?php
include("dbconnect.php");
//session_start();
$user_id = $_SESSION['user_id'];
  $query = " SELECT * from address_tbl where  deleted = '0' and user_id = '$user_id' ";
 $query_res = $link->query($query);
 $addr = "0";
 while($rows = mysqli_fetch_array($query_res))
            {
            //foreach($query_res as $rows )
               //{
                  $address_id=$rows['address_id'];
                  $address = $rows['address'];
                  $pincode = $rows['pincode'];
                  $city = $rows['city'];
                  $state = $rows['state'];
                  $land_mark = $rows['land_mark'];
                  $name = $rows['name'];
                  $mobile_number=$rows['mobile_number'];
                  $addr = $addr+1;
                  //$password =$rows['password'];
                  //$tax_rate = $rows["tax_rate"];

               

       ?>

         
   <div style="padding-left: 7%;padding-top: 3%;width: 50%"><table><input type="radio" id="address" name="address_id" value="<?php echo $address_id; ?>" required>&nbsp <i>ADDRESS: <?php echo $addr;?></i>

         <tr><td> <?php echo " $name"; ?>,
               <?php echo " $address"; ?>,
               <?php echo " $city"; ?>,
                  <?php echo " $state"; ?>,
               <?php echo " $land_mark"; ?>,
               <?php echo " $pincode"; ?>,
               <?php echo " $mobile_number"; ?></td></tr>         
                   
                     
</td>

               </tr>
         </thead>
</table>

      </div>
         
      <br>      
       <?php
 
       
           
            
 
            }
            
 if(isset($_GET["msg"]))
        {
          if($_GET["msg"]=='1')
          {
            echo "<i style=color:red>ORDER HAS BEEN PLACES SUCESSFULLY</i>";

          }
         
                  }
            //<img src="upload:category_image/jpg;base64,'.base64_encode( $rows['category_image'] )."></img>



  $query= "SELECT p.product_name,p.selling_price,c.quantity,p.product_id,p.product_description,c.cart_id from product_tbl p,ajax_cart_tbl c where c.product_id = p.product_id and c.user_id = '$user_id' and c.deleted = '0' and p.deleted = '0'";
$query_run = $link->query($query);
if (mysqli_num_rows($query_run) > 0) 
{

?>
<b style="padding-left: 10%;"><a href="add_address.php" class="btnm btn-secondary">ADD ADDRESS</a><br></b><br>
   
<a href="cart.php">cancel</a>
<button type="submit" name="placeorder" id="button" class="btn btn-outline-danger">PLACE ORDER</button>
<?php
}

?>
</form>


<!--

                           <form action="payment.html" method="post" class="creditly-card-form agileinfo_form">
                              <section class="creditly-wrapper wrapper">
                                 <div class="information-wrapper">
                                    <div class="first-row form-group">
                                       <div class="controls">
                                          <label class="control-label">Full name: </label>
                                          <input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
                                       </div>
                                       <div class="card_number_grids">
                                          <div class="card_number_grid_left">
                                             <div class="controls">
                                                <label class="control-label">Mobile number:</label>
                                                <input class="form-control" type="text" placeholder="Mobile number">
                                             </div>
                                          </div>
                                          <div class="card_number_grid_right">
                                             <div class="controls">
                                                <label class="control-label">Landmark: </label>
                                                <input class="form-control" type="text" placeholder="Landmark">
                                             </div>
                                          </div>
                                          <div class="clear"> </div>
                                       </div>
                                       <div class="controls">
                                          <label class="control-label">Town/City: </label>
                                          <input class="form-control" type="text" placeholder="Town/City">
                                       </div>
                                       <div class="controls">
                                          <label class="control-label">Address type: </label>
                                          <select class="form-control option-w3ls">
                                             <option>Office</option>
                                             <option>Home</option>
                                             <option>Commercial</option>
                                          </select>
                                       </div>
                                    </div>
                                    <button class="submit check_out">Delivery to this Address</button>
                                 </div>
                              </section>
                           </form>

                        -->
                           <div class="checkout-right-basket">
                              <a href="payment.html">Make a Payment </a>
                           </div>
                        </div>
                        <div class="clearfix"> </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
               </div>
               <!-- //top products -->
            </div>
      </section>
      <!--subscribe-address-->
      <section class="subscribe">
         <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6 col-md-6 map-info-right px-0">
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
            </div>
            <div class="col-lg-6 col-md-6 address-w3l-right text-center">
               <div class="address-gried ">
                  <span class="far fa-map"></span>
                  <p>25478 Road St.121<br>USA New Hill
                  <p>
               </div>
               <div class="address-gried mt-3">
                  <span class="fas fa-phone-volume"></span>
                  <p> +(000)123 4565<br>+(010)123 4565</p>
               </div>
               <div class=" address-gried mt-3">
                  <span class="far fa-envelope"></span>
                  <p><a href="mailto:info@example.com">info@example1.com</a>
                     <br><a href="mailto:info@example.com">info@example2.com</a>
                  </p>
               </div>
            </div>
         </div>
		 </div>
      </section>
      <!--//subscribe-address-->
      <section class="sub-below-address py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Get In Touch Us</h3>
            <div class="icons mt-4 text-center">
               <ul>
                  <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                  <li><a href="#"><span class="fas fa-envelope"></span></a></li>
                  <li><a href="#"><span class="fas fa-rss"></span></a></li>
                  <li><a href="#"><span class="fab fa-vk"></span></a></li>
               </ul>
               <p class="my-3">velit sagittis vehicula. Duis posuere 
                  ex in mollis iaculis. Suspendisse tincidunt
                  velit sagittis vehicula. Duis posuere 
                  velit sagittis vehicula. Duis posuere 
               </p>
            </div>
            <div class="email-sub-agile">
               <form action="#" method="post">
                  <div class="form-group sub-info-mail">
                     <input type="email" class="form-control email-sub-agile" placeholder="Email">
                  </div>
                  <div class="text-center">
                     <button type="submit" class="btn subscrib-btnn">Subscribe</button>
                  </div>
               </form>
            </div>
         </div>
      </section>
      <!--//subscribe-->
      <!-- footer -->
      <footer class="py-lg-4 py-md-3 py-sm-3 py-3 text-center">
         <div class="copy-agile-right">
            <p> 
               © 2018 Toys-Shop. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a>
            </p>
         </div>
      </footer>
      <!-- //footer -->
      <!-- Modal 1-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="register-form">
                     <form action="#" method="post">
                        <div class="fields-grid">
                           <div class="styled-input">
                              <input type="text" placeholder="Your Name" name="Your Name" required="">
                           </div>
                           <div class="styled-input">
                              <input type="email" placeholder="Your Email" name="Your Email" required="">
                           </div>
                           <div class="styled-input">
                              <input type="password" placeholder="password" name="password" required="">
                           </div>
                           <button type="submit" class="btn subscrib-btnn">Login</button>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
      <!-- //Modal 1-->
      <!--js working-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">




  function addtocart_plus(product_id)
  {
    //alert(product_id);
    var qty = parseInt(document.getElementById("quantity"+product_id).value);
    qty = parseInt(qty)+1;
    document.getElementById("quantity"+product_id).value = qty;
    $.ajax({
          type:'GET',
          url:'ajax_product_cart.php?pro_id='+product_id+'&quantity='+qty,
          //data:"cat_id="+val

          success: function(result){
            alert(result);

       //document.getElementById("submit").innerHTML = result;
     

      }});
  }


  function addtocart_minus(product_id)
  {
    //alert(product_id);
    var qty = parseInt(document.getElementById("quantity"+product_id).value);
    qty = parseInt(qty)-1;
    //if (qty < 0) divUpd.text(qty);
    if (qty < 0) divUpd.text(qty);
    document.getElementById("quantity"+product_id).value = qty;
    $.ajax({
          type:'GET',
          url:'ajax_minus_product_cart.php?pro_id='+product_id+'&quantity='+qty,

          success: function(result){
        alert(result);
            if(result==0)
            {

               window.location.reload();

            }
         
            }});

  }





</script>
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!-- cart-js -->	

      <script src="js/minicart.js"></script>
      <script>
         toys.render();
         
         toys.cart.on('toys_checkout', function (evt) {
         	var items, len, i;
         
         	if (this.subtotal() > 0) {
         		items = this.items();
         
         		for (i = 0, len = items.length; i < len; i++) {}
         	}
         });
      </script>
      <!--// cart-js -->
      <!--quantity-->
      <script>
         $('.value-plus').on('click', function () {
         	var divUpd = $(this).parent().find('.value'),
         		newVal = parseInt(divUpd.text(), 10) + 1;
         	divUpd.text(newVal);
         });
         
         $('.value-minus').on('click', function () {
         	var divUpd = $(this).parent().find('.value'),
         		newVal = parseInt(divUpd.text(), 10) - 1;
         	if (newVal >= 1) divUpd.text(newVal);
         });
      </script>
      <!--quantity-->
      <!--closed-->
      <script>
         $(document).ready(function (c) {
         	$('.close1').on('click', function (c) {
         		$('.rem1').fadeOut('slow', function (c) {
         			$('.rem1').remove();
         		});
         	});
         });
      </script>
      <script>
         $(document).ready(function (c) {
         	$('.close2').on('click', function (c) {
         		$('.rem2').fadeOut('slow', function (c) {
         			$('.rem2').remove();
         		});
         	});
         });
      </script>
      <script>
         $(document).ready(function (c) {
         	$('.close3').on('click', function (c) {
         		$('.rem3').fadeOut('slow', function (c) {
         			$('.rem3').remove();
         		});
         	});
         });
      </script>
      <!--//closed-->
      <!-- start-smoth-scrolling -->
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
         	var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1200,
         		easingType: 'linear'
         	};
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->
   </body>
</html>