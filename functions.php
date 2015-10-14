<?php

function j2theme_filter_wp_title( $currenttitle, $sep, $seplocal) {
	$site_name = get_bloginfo('name');
	$full_title = $site_name . $currenttitle;
	
	if(is_front_page() || is_home() {
		$site_desc = get_bloginfo( 'description' );
		$full_title .='' . $sep . '' . $site_desc;
	}
	return $full_title;
}

 add_filter( 'wp_title', 'j2theme_filter-wp-title', 10, 3);