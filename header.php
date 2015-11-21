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
	 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<!-- Le styles -->
	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
	
	 <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
	<?php wp_enqueue_script("jquery"); ?>
	<title><?php bloginfo("name") . wp_title( '|' ); ?></title>
	
	<?php wp_head(); ?>
    
    <link type="text/css" href="bootstrap/css/bootstrap.css">	
    <link type="text/css" href="bootstrap/css/bootstrap-responsive.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>

</head>

<body <?php body_class(); ?>>

<!-- Start of Navigation -->

<nav class="clearfix">
    <ul class="clearfix">
        <li><a href="#home">HOME</a></li>
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#dreams">DREAMS</a></li>
        <li><a href="#events">EVENTS</a></li>
        <li><a href="#contact">CONTACT</a></li> 
    </ul>
    <a href="#" id="pull">Menu</a>
</nav>

    
<!-- Start of old Navigation
<div id="nav">

<?php //wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

>>>>>>> origin/master
</div>
End of old Navigation -->
	

	<div id="content" class="site-content">
