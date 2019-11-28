<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Knitwear Landing Page (CSS Grid, Flexbox, AOS Scrolling Animations)</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Google Fonts -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700|Montserrat:300,400,500,700,900" rel="stylesheet"><link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css'>
<link rel='stylesheet' href='https://unpkg.com/aos@2.3.0/dist/aos.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link
href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
<link
href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
<link
href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!-- 
<link rel="stylesheet" href="./style.css"> -->
<link rel="stylesheet" href="css/abouts.css">
</head>
<body>
<!-- partial:index.partial.html -->
<header>
  <!-- <div class="headerBg"></div> -->
<nav>
    <div class="container">

</div>
    <!-- Banner Nav -->
    <section class="top-banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4">
            <span>EN</span>
            <span>ZAR</span>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <span>Free shipping for standard order over $100</span>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">

    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-google"></a>
    <a href="#" class="fa fa-linkedin"></a>

          </div>
        </div>
      </div>
    </section>
    <!-- End Banner Nav -->

   <ul>
     <a href="index.php">Home</a>
     <a href="shop.php">Shop</a>
     <a href="about.php">N A T E B</a>
     <a href="blog.php">Blog</h2></a>
     <a href="#">Contact</a>
  </ul>
</nav>
<!--=====================================================================-->
<section id="section-one" class="section">


</section>

  
  <div class="headerImage"></div>
</header>
<main>
   
 <?php
session_start(); //start session
include("config.inc.php");
setlocale(LC_MONETARY,"en_US"); // US national format (see : http://php.net/money_format)
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Review Your Cart Before Buying</title>
<link href="css/styling.css" rel="stylesheet" type="text/css">
</head>
<body>
<h3 style="text-align:center">Review Your Cart Before Buying</h3>
<?php
if(isset($_SESSION["products"]) && count($_SESSION["products"])>0){
	$total 			= 0;
	$list_tax 		= '';
	$cart_box 		= '<ul class="view-cart">';

	foreach($_SESSION["products"] as $product){ //Print each item, quantity and price.
		$product_name = $product["product_name"];
		$product_qty = $product["product_qty"];
		$product_price = $product["product_price"];
		$product_code = $product["product_code"];
		$product_color = $product["product_color"];
		$product_size = $product["product_size"];
		
		$item_price 	= sprintf("%01.2f",($product_price * $product_qty));  // price x qty = total item price
		
		$cart_box 		.=  "<li> $product_code &ndash;  $product_name (Qty : $product_qty | $product_color | $product_size) <span> $currency. $item_price </span></li>";
		
		$subtotal 		= ($product_price * $product_qty); //Multiply item quantity * price
		$total 			= ($total + $subtotal); //Add up to total price
	}
	
	$grand_total = $total + $shipping_cost; //grand total
	
	foreach($taxes as $key => $value){ //list and calculate all taxes in array
			$tax_amount 	= round($total * ($value / 100));
			$tax_item[$key] = $tax_amount;
			$grand_total 	= $grand_total + $tax_amount; 
	}
	
	foreach($tax_item as $key => $value){ //taxes List
		$list_tax .= $key. ' '. $currency. sprintf("%01.2f", $value).'<br />';
	}
	
	$shipping_cost = ($shipping_cost)?'Shipping Cost : '.$currency. sprintf("%01.2f", $shipping_cost).'<br />':'';
	
	//Print Shipping, VAT and Total
	$cart_box .= "<li class=\"view-cart-total\">$shipping_cost  $list_tax <hr>Payable Amount : $currency ".sprintf("%01.2f", $grand_total)."</li>";
	$cart_box .= "</ul>";
	
	echo $cart_box;
}else{
	echo "Your Cart is empty";
}
?>
<!--  <section class="section teaser teaserAccessories mobileCenter">
   <div class="sectionImg"></div>
   <div class="sectionCopy" data-aos="fade-up">
     <h3>Cozy Up</h3>
    <hr class="Line">
     <p>One-of-a-kind hats, scarves, and sweaters to keep you looking fine and feeling cozy.</p>
     <a href="#" class="button">Shop Accessories</a>
   </div>
 </section>
 -->

</main>
<footer class="footer">
  <div class="footerLinksContainer">
  <div class="footerLinks">
    <p>Shop</p>
    <a href="#">Yarns</a>
    <a href="#">Hats</a>
    <a href="#">Scarves</a>
    <a href="#">Stockists</a>
  </div>
  <div class="footerLinks">
    <p>About Us</p>
    <a href="#">Our Story</a>
    <a href="#">Press</a>
    <a href="#">Blog</a>
    <a href="#">Jobs</a>
  </div>
  </div>
  <div class="newsletter">
  <p>Wouldn't knit be terrible to miss shop updates?</p>
    <div class="emailContainer">
      <form>
        <input type="email" placeholder="youremail@gmail.com"/>
        <a = button>&nbsp;Up</a>
      </form>
    </div>
  </div>
  <div class="socialLinks">
    <a class="iconSocial"><i class="fab fa-instagram"></i></a>
    <a class="iconSocial"><i class="fab fa-twitter"></i></a>
    <a class="iconSocial"><i class="fab fa-facebook"></i></a>
    <a class="iconSocial"><i class="fab fa-youtube"></i></a>
  </div>
</footer>
<!--=====================================================================-->
<footer2>
  <p>&copy;<span id="year"></span>
    Company. All rights Reserved. </p>
</footer2>
<!--=====================================================================-->
<!-- partial -->
  <script src='https://unpkg.com/aos@2.3.0/dist/aos.js'></script><!-- 
<script  src="./script.js"></script> -->
<script  src="js/script.js"></script>

</body>
</html>