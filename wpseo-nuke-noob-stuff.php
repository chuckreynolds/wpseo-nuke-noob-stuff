<?php
/**
 * Plugin Name: Yoast SEO Nuke Noob Stuff
 * Plugin URI: https://wordpress.org/plugins/wpseo-nuke-noob-stuff/
 * Description: This WordPress plugin is built to extend and remove the noob things in the Yoast SEO (WPSEO) plugin.
 * Version: 2-beta.1
 * Author: Chuck Reynolds
 * Author URI: https://chuckreynolds.us
 * License: GPL v3
 */

/**
 * Yoast SEO Nuke Noob Stuff Plugin
 * Copyright (C) 2014-215, Chuck Reynolds - chuck@rynoweb.com
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * If WPSEO (Yoast) Plugin not active then rage quit. (╯°□°)╯︵ ┻━┻
 */
if ( ! defined( 'WPSEO_VERSION' ) ) {
	return;
}

/**
 * Removes most stuff
 */
add_filter( 'wpseo_use_page_analysis', '__return_false' );

/**
 * Removes the "Yoast SEO Posts Overview" dashboard metabox
 */
function yseo_nuke_dash_widget() {

	remove_meta_box( 'wpseo-dashboard-overview', 'dashboard', 'side' );

}
add_action( 'wp_dashboard_setup', 'yseo_nuke_dash_widget' );

/**
 * Remove noob stuff from admin bar
 */
function yseo_nuke_adminbar_parts() {

	global $wp_admin_bar;

	#$wp_admin_bar->remove_node( 'wpseo-menu' );      // removes the main seo nav from admin bar
	$wp_admin_bar->remove_node( 'wpseo-kwresearch' ); // removes keyword research submenu from admin bar

}
add_action( 'admin_bar_menu', 'yseo_nuke_adminbar_parts', 999 );

/**
 * Remove random other stuff that makes sense but only way to do it is get hacky with css display none
 */
function yseo_nuke_css_parts() {

	echo '<style>
	#wpseo-score { display: none; }
	';

}
add_action( 'admin_head', 'yseo_nuke_css_parts' );

