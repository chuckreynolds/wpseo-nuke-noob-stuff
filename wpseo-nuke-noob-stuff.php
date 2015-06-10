<?php
/**
 * Plugin Name: WordPress SEO Nuke Noob Stuff
 * Plugin URI: https://wordpress.org/plugins/wpseo-nuke-noob-stuff/
 * Description: This WordPress plugin is built to extend and remove the noob things in the WordPress SEO (WPSEO) plugin by Yoast
 * Version: 1.1.1
 * Author: Chuck Reynolds
 * Author URI: https://chuckreynolds.us
 * License: GPL v3
 */

/**
 * WordPress SEO Plugin
 * Copyright (C) 2014, Chuck Reynolds - chuck@rynoweb.com
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

if ( defined( 'WPSEO_VERSION' ) ) {
	add_filter( 'wpseo_use_page_analysis', '__return_false' );
}
