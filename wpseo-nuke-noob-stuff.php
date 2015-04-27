<?php
/**
 * Plugin Name: WordPress SEO Nuke Noob Stuff
 * Plugin URI: https://github.com/chuckreynolds/wpseo-nuke-noob-stuff
 * Description: This WordPress plugin is built to extend and remove the noob things in the WordPress SEO (WPSEO) plugin by Yoast
 * Version: 1.1
 * Author: @ChuckReynolds
 * Author URI: https://twitter.com/chuckreynolds
 * License: GPL2
 */

if ( defined( 'WPSEO_VERSION' ) ) {
	add_filter( 'wpseo_use_page_analysis', '__return_false' );
}
