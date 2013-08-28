<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> <?php echo get_stylesheet_uri(); ?> </title>
<link rel="icon" type="image/gif" href="<?php echo get_template_directory_uri(); ?>/images/favicon.gif">
<link rel="stylesheet" src="//normalize-css.googlecode.com/svn/trunk/normalize.css" />
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lustria' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css" />

<!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->

<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.0.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
<script type="text/javascript" src="js/waypoints.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/slides.js"></script>
<script type="text/javascript" src="js/js.js"></script>
</head>
<body>


  
 <ul class="navigation">
   <img src="<?php echo get_template_directory_uri(); ?>/images/header_logo.png" alt="logo" id="header_logo">
   <li data-slide="1">Welcome</li>
   <li data-slide="2">About</li>
   <li data-slide="3">Work</li>
   <li data-slide="4">Blog</li>
   <li data-slide="5">Contact</li>
 </ul>
<!--Welcome Page-->
 <div class="slide" id="slide1" data-slide="1" data-stellar-background-ratio="0.5">
    	<img class="button" data-slide="2" id="logo" title="click here, dummy" src="<?php echo get_template_directory_uri(); ?>/images/SSLogo.png"></img>
      <img src="<?php echo get_template_directory_uri(); ?>/images/slot.png" alt="slot" id="slot">
	</div><!--End Slide 1-->


	<div class="slide" id="slide2" data-slide="2" data-stellar-background-ratio="0.5">
      <div id="intro">
      <h1>Welcome</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    	<a class="button" data-slide="3" title=""></a>
	</div><!--End Slide 2-->


<div class="slide" id="slide3" data-slide="3" data-stellar-background-ratio="0.5">
    <div class="iconset">
        <div id="first_icon">
          <img class="icon" id="print" src="<?php echo get_template_directory_uri(); ?>/images/print.png"></img>
          <h2>Print</h2>
        </div>
        <div id="second_icon">
          <img class="icon" id="web" src="<?php echo get_template_directory_uri(); ?>/images/code.png"></img>
          <h2>Web</h2>
        </div>
        <div id="third_icon">
          <img class="icon" id="type" src="<?php echo get_template_directory_uri(); ?>/images/font.png"></img>
          <h2>Typography</h2>
        </div>
        <div id="fourth_icon">
          <img class="icon" id="video" src="<?php echo get_template_directory_uri(); ?>/images/film.png"></img>
          <h2>Film</h2>
        </div>
        <div id="fifth_icon">
          <img class="icon" id="hand" src="<?php echo get_template_directory_uri(); ?>/images/hand.png"></img>
          <h2>Handmade</h2>
        </div>
    </div>
      <a class="button" data-slide="4" title=""></a>
</div>

  <!--End Slide 3-->

  <!--Bios Page-->

	<div class="slide" id="slide4" data-slide="4" data-stellar-background-ratio="0.5">
		<a class="button" data-slide="5" title=""></a>

	</div><!--End Slide 4-->

<!--Contact Page-->

	<div class="slide" id="slide5" data-slide="5">
    <form id="contact_form" name="Contact" action="#" method="get">
Name: <input type="text" name="Name" value="Your Full Name"><br>
e-mail: <input type="text" name="email" value="you@example.com"><br>
<input type="submit" value="Submit">
</form> 
  <img src="<?php echo get_template_directory_uri(); ?>/images/placemarker.png" alt="placemarker" id="placemarker" data-stellar-ratio="0.8">
	</div><!--End Slide 5-->

  <div id="footer">
    <p id="copyright">&copy; &nbsp;&nbsp; 2013 - 2014 Stolen Sheep Design, LLC</p>
  </div>

</body>
</html>