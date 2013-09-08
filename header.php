<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> <?php bloginfo('name'); ?></title>
<!--stylesheets-->
<link rel="icon" type="image/gif" href="<?php echo get_template_directory_uri(); ?>/images/favicon.gif">
<link rel="stylesheet" src="//normalize-css.googlecode.com/svn/trunk/normalize.css" />
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'/>
<link href='http://fonts.googleapis.com/css?family=Lustria' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"/>
<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css"/>

<!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
<!--javascripts-->
<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.0.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.stellar.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/waypoints.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slides.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/js.js"></script>

<?php wp_head(); ?> 

<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); 
 ?>" />

</head>
<body>

<header>
  
 <ul class="navigation">
   <img src="<?php echo get_template_directory_uri(); ?>/images/header_logo.png" alt="logo" id="header_logo">
   <li data-slide="1">Welcome</li>
   <li data-slide="2">About</li>
   <li data-slide="3">What We Do</li>
   <li data-slide="4">Portfolio</li>
   <li data-slide="5">Contact</li>
 </ul>

 </header>