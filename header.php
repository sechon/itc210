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
        <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/bootstrap/css/bootstrap.css">
	
	 <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
	<?php wp_enqueue_script("jquery"); ?>
	<title><?php bloginfo("name") . wp_title( '|' ); ?></title>
	
	<?php wp_head(); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/dreams.js"> </script>


</head>

<body <?php body_class(); ?>>

<!-- Start of Navigation -->

<!-- Start of Navigation -->

<a href="#" class="hamburger">MENU &#62;></a>
<a href="#" class="hamburger-mobile">&#9776;</a>
<div class="top-nav-bar"></div>    
<nav class="clearfix">
    <ul class="clearfix">
        <li class="col-md-2"><a href="#home">HOME</a></li>
        <li class="col-md-2"><a href="#about">ABOUT</a></li>
        <li class="col-md-2"><a href="#dreams">DREAMS</a></li>
        <li class="col-md-2"><a href="#events">EVENTS</a></li>
        <li class="col-md-2"><a href="#contact">CONTACT</a></li>
    </ul>
</nav>

    
<!-- Start of old Navigation
<div id="nav">

<?php //wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

>>>>>>> origin/master
</div>
End of old Navigation -->
	

	<div id="content" class="site-content">
