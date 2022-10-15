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
      <?php
   include('dbconnect.php');
   session_start();
$user_id = $_SESSION['user_id'];
if(isset($_SESSION['user_id']))
{
   $user_id = $_SESSION['user_id'];
}
else
{
   header("location:login.php");
}

 include('stylesheet.php');
   ?>
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
      <!--price range-->
      <link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
      <!--//price range-->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
   </head>
   <body>

      <?php
         include('header1.php');



      ?>
      <!--headder-->
      
     
      <!--//headder-->
      <!-- banner -->
      
      <!--//banner -->
      <!-- short -->
      <div class="using-border py-3">
         <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
               <li>
                  <a href="index.html">Home</a>
                  <span>/ /</span>
               </li>
               <li>Shop Now</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
      <!--show Now-->  
      <!--show Now-->  
      <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container-fluid py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">ALL PRODUCTS</h3>
            <div class="row">
               <div class="side-bar col-lg-3">
                  <div class="search-hotel">
                     <h3 class="agileits-sear-head">Search Here..</h3>
                    
                     <form method="POST" action="product.php" class="form-inline my-lg-0">
                     <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search">
                     <input type="submit" value=" ">
                  </form>
                  </div>
                     <!-- price range -->
                     <div class="range">
                        <h3 class="agileits-sear-head">Price range</h3>
                        <ul class="dropdown-menu6">
                           <li>

                              <div id="slider-range"></div>
                              <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
                           </li>
                        </ul>
                     </div>
                     <!-- //price range -->
                  <!--preference -->
                  <div class="left-side">
                     <h3 class="agileits-sear-head">Occasion</h3>
                     <ul>
                        <li>
                           <input type="checkbox" class="checked">
                           <span class="span">Gift</span>
                        </li>
                        <li>
                           <input type="checkbox" class="checked">
                           <span class="span">Kid Play</span>
                        </li>
                        <li>
                           <input type="checkbox" class="checked">
                           <span class="span">Dolls</span>
                        </li>
                        <li>
                           <input type="checkbox" class="checked">
                           <span class="span">Remot</span>
                        </li>
                     </ul>
                  </div>
                  <!-- // preference -->
                  <!-- discounts -->
                  <div class="left-side">
                     <h3 class="agileits-sear-head">Discount</h3>
                     <ul>
                        <li>
                           <input type="checkbox" class="checked">
                           <span class="span">5% or More</span>
                        </li>
                        <li>
                           <input type="checkbox" class="checked">
                           <span class="span">10% or More</span>
                        </li>
                        <li>
                           <input type="checkbox" class="checked">
                           <span class="span">20% or More</span>
                        </li>
                        <li>
                           <input type="checkbox" class="checked">
                           <span class="span">30% or More</span>
                        </li>
                        <li>
                           <input type="checkbox" class="checked">
                           <span class="span">50% or More</span>
                        </li>
                        <li>
                           <input type="checkbox" class="checked">
                           <span class="span">60% or More</span>
                        </li>
                     </ul>
                  </div>
                  <!-- //discounts -->
                  <!-- reviews -->
                  <div class="customer-rev left-side">
                     <h3 class="agileits-sear-head">Customer Review</h3>
                     <ul>
                        <li>
                           <a href="#">
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <span>5.0</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fas fa-star" ></i>
                           <i class="fas fa-star" ></i>
                           <i class="fas fa-star" ></i>
                           <i class="fas fa-star" ></i>
                           <i class="far fa-star"></i>
                           <span>4.0</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star-half"></i>
                           <i class="far fa-star"></i>
                           <span>3.5</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="far fa-star"></i>
                           <i class="far fa-star"></i>
                           <span>3.0</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star-half"></i>
                           <i class="far fa-star"></i>
                           <i class="far fa-star"></i>
                           <span>2.5</span>
                           </a>
                        </li>
                     </ul>
                  </div>   
                  <!-- //reviews -->
                  <!-- deals -->












                  <div class="deal-leftmk left-side">
                     <h3 class="agileits-sear-head">Special Deals</h3>
                     <div class="row special-sec1">
                        <div class="col-xs-4 img-deals">
                           <img src="admin/g1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-xs-8 img-deal1">
                           <h3>toys(barbie)</h3>
                           <a href="single.html">$575.00</a>
                        </div>
                        <div class="clearfix"></div>
                     </div>












                     <div class="row special-sec1">
                        <div class="col-xs-4 img-deals">
                           <img src="images/g2.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-xs-8 img-deal1">
                           <h3>toy(todos)</h3>
                           <a href="single.html">$480.00</a>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                     <div class="row special-sec1">
                        <div class="col-xs-4 img-deals">
                           <img src="images/g3.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-xs-8 img-deal1">
                           <h3>toys (Grey)</h3>
                           <a href="single.html">$165.00</a>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                     <div class="row special-sec1">
                        <div class="col-xs-4 img-deals">
                           <img src="images/g2.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-xs-8 img-deal1">
                           <h3>Soft teddy </h3>
                           <a href="single.html">$225.00</a>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                     <div class="row special-sec1">
                        <div class="col-xs-4 img-deals">
                           <img src="images/g4.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-xs-8 img-deal1">
                          <h3>pink bear</h3>
                           <a href="single.html">$169.00</a>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
                  <!-- //deals -->
               </div>



<div class="left-ads-display col-lg-9">
                  <div class="row">

                                 <?php
                                 $search_val = "";
                                 
                                        $query = " SELECT  p.product_id,p.product_name,p.product_code,p.discount,p.quantity,p.selling_price,i.product_img,i.product_img_id from product_img_tbl i,product_tbl p where p.product_id = i.product_id and i.deleted = '0' and p.deleted='0'"; 
                                        if(isset($_POST["search"]))
                                          {
                                             
                                            $search_val = $_POST["search"];
                                            $query = $query." and p.product_name like '%$search_val%'";
                                          }

                                        $query = $query."group by i.product_id";
                                       // echo $query;
                                       $query_result = $link->query($query);
                                    
                                             while($rows = mysqli_fetch_array($query_result))
                                             {
                                                   $product_name = $rows['product_name'];
                                                   $product_img=$rows['product_img'];
                                                   //$product_description =$rows['product_description'];
                                                   
                                                   $quantity=$rows['quantity'];
                                                   $discount=$rows['discount'];
                                                   $selling_price=$rows['selling_price'];
                                                   $product_id = $rows["product_id"];

                                 ?>



               
                     <div class="col-lg-4 col-md-6 col-sm-6 product-men women_two">
                        <div class="product-toys-info">
                           <div class="men-pro-item">
                              <div class="men-thumb-item">
                                 <a href="view_buy_products.php?product_id=<?php echo $rows['product_id'];  ?>">
                                             <img src="admin/product_img/<?php echo $product_img;?>" width="40" height="160" /></a>
                                             <?php echo "<b> $product_name</b>"; ?><br>
                                             <?php echo " $discount &nbsp%0FF"; ?><br>
                                             <?php echo "RS $selling_price"; ?><br>
                                                
                                 <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                       <a href="single.php?product_id=<?php echo $product_id; ?>" class="link-product-add-cart">Quick View</a>
                                    </div>
                                 </div>
                                 <span class="product-new-top">New</span>
                              </div>
                              <div class="item-info-product">
                                 <div class="info-product-price">
                                    <div class="grid_meta">
                                       <div class="product_price">
                                          
                                                      

                                                       
                         <button type="button" name="submit" id="button1" class="btn btn-sm" onclick= "addtocart_plus(<?php echo $product_id; ?>)" ><h4>+</h4></button>
                                                <?php
                                                //$user_id = $_SESSION['user_id'];
                                                $quantity2 = 0;
                                                $query1 = "SELECT quantity from ajax_cart_tbl where product_id='$product_id' and user_id='$user_id'  and deleted = '0'";
                                                $query_res = $link->query($query1);
                                                while ($row = mysqli_fetch_array($query_res)) {
                                                   //$cart_id = $row['cart_id'];
                                                   $quantity2 = $row['quantity'];
                                                   
                                                }
                                                   
                                                   ?>
                                                   <input type="text" name="quantity" id="quantity<?php echo $product_id; ?>" value="<?php echo $quantity2; ?>" size="1px">
                                             
                                                
                                    

                                                   <button class="btn btn-sm"  onclick="addtocart_minus(<?php echo $product_id; ?>)"> <h4>-</h4></button><br><br>                </div>
                                    </div>
                                    <div class="toys single-item hvr-outline-out">
                                       <form action="#" method="post">
                                          
                                         
                                          <a href="checkout.php" class="btn btn-outline-warning" class="toys-cart ptoys-cart">
                                            
                                          <i class="fas fa-cart-plus"></i><br></a>



                                          </button>
                                       </form>
                                    </div>
                                 </div>
                                 <div class="clearfix"></div>
                              </div>
                           </div>
                        </div>
                     </div>
   <?php

}
   ?>  
     </div>
               </div>
     </div>

         </div>   
    </section>          
                  
      <!-- //show Now-->
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
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!-- cart-js -->
       <script src="js/minicart.js"></script>
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
            //alert(result);

       //document.getElementById("submit").innerHTML = result;

      }});
   }


   function addtocart_minus(product_id)
   {
      //alert(product_id);
      var qty = parseInt(document.getElementById("quantity"+product_id).value);
      qty = parseInt(qty)-1;
      if (qty < 0) divUpd.text(qty);
       document.getElementById("quantity"+product_id).value = qty;
      $.ajax({
          type:'GET',
          url:'ajax_minus_product_cart.php?pro_id='+product_id+'&quantity='+qty,
          success: function(result){
            }});
   }

//if (Number.isInteger(num) && num >= 0) {
    //true
//}







</script>
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
      <!-- //cart-js -->
      <!-- price range (top products) -->
      <script src="js/jquery-ui.js"></script>
      <script>
         //<![CDATA[ 
         $(window).load(function () {
            $("#slider-range").slider({
               range: true,
               min: 0,
               max: 9000,
               values: [50, 6000],
               slide: function (event, ui) {
                  $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
               }
            });
            $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

         }); //]]>
      </script>
      <!-- //price range (top products) -->

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
