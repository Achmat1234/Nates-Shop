<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Online store</title>
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
<link rel="stylesheet" href="css/style.css">
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
    <a href="#" class="cart-box" id="cart-info" title="View Cart">
<?php 
if(isset($_SESSION["products"])){
	echo count($_SESSION["products"]); 
}else{
	echo 0; 
}
?>
</a>

<div class="shopping-cart-box">
<a href="#" class="close-shopping-cart-box" >Close</a>
<h3>Your Shopping Cart</h3>
    <div id="shopping-cart-results">
    </div>
</div>

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
<!-- <section id="section-one" class="section">


</section> -->

  
  <div class="headerImage"></div>
</header>
<main>
  <!--  <section class="valueProps section">
   <h3>Small Business Supporting Big Ideas</h3>
  <hr class="Line">
  <div class="grid-3">
    <div class="grid-3-item">
      <div class="grid-3-img quality" data-aos="zoom-in"></div>
      <h4>Building Community</h4>
      <p>What started as a one woman show has grown into a community of makers supporting women and POC-owned vendors whenever possible. Because together, we all rise.</p>
    </div>
    <div class="grid-3-item">
      <div class="grid-3-img" data-aos="zoom-in" data-aos-delay="150"></div>
      <h4>Sustainable Fashion</h4>
      <p>Quality fashions produced by hand, made to last, with eco-friendly vegetable-dyed yarns that minimize water use. Always one-of-a-kind, never mass produced.</p>
    </div>
    <div class="grid-3-item">
      <div class="grid-3-img" data-aos="zoom-in" data-aos-delay="300"></div>
      <h4>Giving Back</h4>
      <p>We partner with local non-profit organizations to provide free knitting classes and warm clothing to underserved communities. <a href="#">Get in touch</a> to find out more!</p>
    </div>
  </div>
</section> -->
<?php
session_start(); //start session
include("config.inc.php"); //include config file
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ajax Shopping Cart</title>
<link href="css/styling.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script>


$(document).ready(function(){	
		$(".form-item").submit(function(e){
			var form_data = $(this).serialize();
			var button_content = $(this).find('button[type=submit]');
			button_content.html('Adding...'); //Loading button text 

			$.ajax({ //make ajax request to cart_process.php
				url: "cart_process.php",
				type: "POST",
				dataType:"json", //expect json value from server
				data: form_data
			}).done(function(data){ //on Ajax success
				$("#cart-info").html(data.items); //total items in cart-info element
				button_content.html('Add to Cart'); //reset button text to original text
				alert("Item added to Cart!"); //alert user
				if($(".shopping-cart-box").css("display") == "block"){ //if cart box is still visible
					$(".cart-box").trigger( "click" ); //trigger click to update the cart box.
				}
			})
			e.preventDefault();
		});

	//Show Items in Cart
	$( ".cart-box").click(function(e) { //when user clicks on cart box
		e.preventDefault(); 
		$(".shopping-cart-box").fadeIn(); //display cart box
		$("#shopping-cart-results").html('<img src="images/ajax-loader.gif">'); //show loading image
		$("#shopping-cart-results" ).load( "cart_process.php", {"load_cart":"1"}); //Make ajax request using jQuery Load() & update results
	});
	
	//Close Cart
	$( ".close-shopping-cart-box").click(function(e){ //user click on cart box close link
		e.preventDefault(); 
		$(".shopping-cart-box").fadeOut(); //close cart-box
	});
	
	//Remove items from cart
	$("#shopping-cart-results").on('click', 'a.remove-item', function(e) {
		e.preventDefault(); 
		var pcode = $(this).attr("data-code"); //get product code
		$(this).parent().fadeOut(); //remove item element from box
		$.getJSON( "cart_process.php", {"remove_code":pcode} , function(data){ //get Item count from Server
			$("#cart-info").html(data.items); //update Item count in cart-info
			$(".cart-box").trigger( "click" ); //trigger click on cart-box to update the items list
		});
	});

});
</script>
</head>
<body>
<div align="center">
<h3></h3>
</div>

<?php
//List products from database
$results = $mysqli_conn->query("SELECT product_name, product_desc, product_code, product_image, product_price FROM products_list");
if (!$results){
    printf("Error: %s\n", $mysqli_conn->error);
    exit;
}

//Display fetched records as you please
$products_list =  '<ul class="products-wrp">';

while($row = $results->fetch_assoc()) {
$products_list .= <<<EOT
<li>
<form class="form-item">
<h4>{$row["product_name"]}</h4>
<div><img src="images/{$row["product_image"]}"></div>
<div>Price : {$currency} {$row["product_price"]}<div>
<div class="item-box">
    <div>
	Color :
    <select name="product_color">
    <option value="Red">Red</option>
    <option value="Blue">Blue</option>
    <option value="Orange">Orange</option>
    </select>
	</div>
	
	<div>
    Qty :
    <select name="product_qty">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    </select>
	</div>
	
	<div>
    Size :
    <select name="product_size">
	<option value="M">M</option>
    <option value="XL">XL</option>
    <option value="XXL">XLL</option>
    </select>
	</div>
	
    <input name="product_code" type="hidden" value="{$row["product_code"]}">
    <button type="submit">Add to Cart</button>
</div>
</form>
</li>
EOT;

}
$products_list .= '</ul></div>';

echo $products_list;
?>


</main>

<a href="lightbox/index2.php" class="button"><h3>LOOK BOOK</h3></a>

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
        <a
        ="button">&nbsp;Up</a>
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

