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

</head>

<body <?php body_class(); ?>>

<!-- Start of Navigation -->

<div class="row">
    <a id="nav-toggle" href="#"><span></span></a>
    <div class="top-nav-bar">
        <div class="col-xs-2">
            <a href="#" class="hamburger">MENU &#62;></a>
        </div>   
        <nav class="clearfix col-xs-10">
            <ul class="clearfix">
                <li><a href="#menu-home">HOME</a></li>
                <li><a href="#menu-about">ABOUT</a></li>
                <li><a href="#menu-dreams">DREAMS</a></li>
                <li><a href="#menu-events">EVENTS</a></li>
                <li><a href="#menu-contact">CONTACT</a></li>
            </ul>
        </nav>
    </div> 
</div>
	

	<div id="content" class="site-content">
