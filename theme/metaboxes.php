<?php 
/**
 * Your Inspiration Themes
 * 
 * In this files the framework register theme metaboxes.
 * 
 * @package WordPress
 * @subpackage Your Inspiration Themes
 * @author Your Inspiration Themes Team <info@yithemes.com>
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

function yit_remove_options_metabox( $array ) {
    
    return $array;
}
add_filter( 'yit_remove_options_metabox', 'yit_remove_options_metabox' );