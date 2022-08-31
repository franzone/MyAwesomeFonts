<?php
/**
 * @package My Awesome Fonts
 * @version 5.1.3
 */
/*
Plugin Name: My Awesome Fonts
Plugin URI: https://tech.franzone.blog/
Description: This is my own personal copy of the Font Awesome package (version 5.1.3).
Author: Jonathan Franzone
Version: 5.1.3
Author URI: https://about.franzone.come
*/

public function myawesomefonts_enqueue_assets() {
    wp_enqueue_style( 'font-awesome-5', plugins_url( 'assets/fontawesome/css/all.min.css', __FILE__ ), [], $this->version );
    wp_enqueue_style( 'font-awesome-4-shims', plugins_url( 'assets/fontawesome/css/v4-shims.min.css', __FILE__ ), [], $this->version );
}
add_action('wp_enqueue_scripts', 'myawesomefonts_enqueue_assets');
