<?php 
/*
Plugin Name: ProPhoto Slideshow Internationalization
Plugin URI: http://www.prophotoblogs.com/support/about/prophoto-slideshow-internationalization-plugin/
Description: For ProPhoto-theme users, adds international character support in flash slideshow titles
Author: <a href="http://www.prophotoblogs.com/">ProPhoto Blogs</a>
Version: 1.0
*/


// load fonts from plugin dir instead of ProPhoto dir
add_filter( 'p3_flash_gal_font_path', 'p3_flash_gal_font_path_filter' );
function p3_flash_gal_font_path_filter( $path ) {
	return WP_PLUGIN_URL . '/prophoto-slideshow-internationalization/';
}

// use plugin version to buste cache
add_filter( 'p3_flash_gal_cache_buster', 'p3_flash_gal_cache_buster_filter' );
function p3_flash_gal_cache_buster_filter( $cache_buster ) {
	return $cache_buster . '&plugin_ver=10';
}

?>