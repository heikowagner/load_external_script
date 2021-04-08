<?php  
/* 
Plugin Name: Load External Script
Plugin URI: https://www.thebigdatablog.com
Description: A Wordpress Plugin to solve the problem that the code snippets presented in your post will eventually change in your GitHub Repo. To avoid having to make all the changes manually you can use this plugin.  The plugin is compatible with SyntaxHighlighter Evolved by Alex Mills for code highlighting.
Author: Heiko Wagner
Version: 1.0
Author URI: https://www.thebigdatablog.com
License: MIT License
*/

function load_external_script_func( $atts ) {
  extract( shortcode_atts( array(
    'file' => ''
  ), $atts ) );

  if ($file!='')
    return @file_get_contents($file);
}
add_shortcode( 'load_external_script', 'load_external_script_func' );
add_filter('the_content', 'do_shortcode', 8);
?>
