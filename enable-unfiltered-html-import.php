<?php 
/**
 * Plugin Name: Enable unfiltered HTML import
 * Plugin URI: https://github.com/bpickard/enable-unfiltered-html-import/blob/master/enable-unfiltered-html-import.php
 * Description: Allows unfiltered HTML content to be imported when using the WordPress import/export function
 * Version: 1.0.0
 * Author: Bill Pickard
 * Author URI: 
 * License: GPL3
 */

/* Found at https://wordpress.stackexchange.com/questions/1549/disabling-html-filtering-when-importing-into-wordpress-multisite on 07-20-2017*/
add_filter( 'force_filtered_html_on_import' , '__return_false' );
