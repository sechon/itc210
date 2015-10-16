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
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="syle.css">
	<title><?php bloginfo("name") . wp_title( '|' ); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Start of Navigation -->
<div id="nav">
	<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
	<!--wp_nav_menu( array( 'theme_location' => 'extra-menu', 'container_class' => 'my_extra_menu_class' ) );-->
</div>
<!-- End of Navigation -->
	

	<div id="content" class="site-content">
