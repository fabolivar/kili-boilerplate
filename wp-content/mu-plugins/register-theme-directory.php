<?php
/*
Plugin Name:  Register Theme Directory
Plugin URI:   https://www.kiliframework.org/
Description:  Register default theme directory
Version:      1.0.0
Author:       Fabolivar
Author URI:   https://github.com/fabolivark/
License:      MIT License
*/

if (!defined('WP_DEFAULT_THEME')) {
    register_theme_directory(ABSPATH . 'wp-content/themes');
}
