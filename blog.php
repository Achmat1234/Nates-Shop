<?php
session_start(); //start session
include("config.inc.php"); //include config file
?>

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
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/prettyPhoto/3.1.6/css/prettyPhoto.min.css'><link rel="stylesheet" href="css/style2.css">
<!-- 
<link rel="stylesheet" href="./style.css"> -->
<link rel="stylesheet" href="css/blogs.css">
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
   <section class="valueProps section">
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
  <a href="photo.html" class="button"><a href="https://images.unsplash.com/photo-1531219432768-9f540ce91ef3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" rel="prettyPhoto"><button>SHOW IMAGE</button></a>
</section>
   

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
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/prettyPhoto/3.1.6/js/jquery.prettyPhoto.min.js'></script><script  src="js/script2.js"></script>

</body>
</html>