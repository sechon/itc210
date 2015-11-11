<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage itc210
 * @since ?
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Le styles -->
	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
	
	 <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
	<?php wp_enqueue_script("jquery"); ?>
	<title><?php bloginfo("name") . wp_title( '|' ); ?></title>
	
	<?php wp_head(); ?>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
    <script src="script.js"></script> 

</head>

<body <?php body_class(); ?>>

<!-- Start of Navigation -->

<div class="navigation responsive">

<ul> 
 	<li><a href="#home">Home</a></li> 
 	<li><a href="#about">About</a></li> 
 	<li><a href="#dreams">Dreams</a></li> 
 	<li><a href="#events">Events</a></li> 
 	<li><a href="#contact">Contact</a></li> 
 	<li class="hidden trigger"><a rel="nofollow" href="#">Show Menu</a></li> 
 </ul>
 </div> 
 <div class="mini-navigation hidden"></div> 

	

<nav class="navi">
    <ul>
      
    </ul>
</nav>
    
<!-- Start of old Navigation
<div id="nav">

<?php //wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

>>>>>>> origin/master
</div>
End of old Navigation -->
	

	<div id="content" class="site-content">
