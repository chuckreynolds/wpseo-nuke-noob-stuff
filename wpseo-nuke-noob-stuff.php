<?php
/**
 * Plugin Name: WP SEO Nuke Noob Stuff
 * Plugin URI: https://github.com/chuckreynolds/wpseo-nuke-noob-stuff
 * Description: turn off yoast wordpress seo page analysis stuff built for noobs
 * Version: 0.1
 * Author: @ChuckReynolds
 * Author URI: https://twitter.com/chuckreynolds
 * License: GPL2
 */

if (defined('WPSEO_VERSION')) {
	add_filter( 'wpseo_use_page_analysis', '__return_false' );
}
