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
</head>

<body <?php body_class(); ?>>

<!-- Start of Navigation -->
<nav class="navi">
    <ul>
      <li><a href="#home">HOME</a></li>
      <li><a href="#about">ABOUT</a></li>
      <li><a href="#dreams">DREAMS</a></li>
      <li><a href="#events">EVENTS</a></li>
      <li><a href="#contact">CONTACT</a></li>
    </ul>
</nav>
    
<!-- Start of old Navigation
<div id="nav">

<?php //wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

</div>
End of old Navigation -->
	

	<div id="content" class="site-content">
