<?php
/*
Plugin Name: Snowy
Plugin URI: 
Description: This plugin will be activated, creates a snowing effect on your site.
Version: 1.0.0
Author: show-ko
Author URI: http://pxdesign.jp/
License: GPL2
TextDomain: snowy
DomainPath: /languages/

License:
Released under the GPL license
http://www.gnu.org/copyleft/gpl.html

	Copyright 2013 (email : show@pxdesign.jp)
	
	This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function snowy_enqueue_scripts() {
	wp_register_script( 'jquerysnow', plugins_url( 'js/jquery.snow.js', __FILE__ ), array(), '1.0.0', true );
	wp_enqueue_script( 'snowy', plugins_url( 'js/snowy.js', __FILE__ ), array('jquerysnow'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'snowy_enqueue_scripts' );