<?php  
	/* 
	* Plugin Name: Sticky Meta Box
	* Description: Allows the meta boxes on the pages/posts to become sticky when scrolled.
	* Version: 1.0
	* Author: Sean Sullivan
	* Author URI: http://www.seansdesign.net
	* Author Email: capt.yar@gmail.com
	* License: A "Slug" license name e.g. GPL2
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

	$siteurl = get_option('siteurl');
		
	define('SMJS_FOLDER', dirname(plugin_basename(__FILE__)));
	define('SMJS_URL', $siteurl.'/wp-content/plugins/' . SMJS_FOLDER);
	define('SMJS_FILE_PATH', dirname(__FILE__));
	define('SMJS_DIR_NAME', basename(SMJS_FILE_PATH));


	// Enqueue JS file
	function stick_meta_js_enqueue( $hook ) {
	    if ('edit.php' != $hook) 
	    
	    wp_enqueue_script( 'sticky-meta-box', plugin_dir_url( __FILE__ ) . 'sticky-meta-box.js' );
	}
	add_action('admin_enqueue_scripts', 'stick_meta_js_enqueue');
	

	// Install
	function stick_meta_install() {
	    global $wpdb;
	}
	register_activation_hook(__FILE__,'stick_meta_install');


	// Uninstall
	function stick_meta_uninstall() {
	    global $wpdb;  	
	}
	register_deactivation_hook(__FILE__ , 'stick_meta_uninstall' );
	
?>