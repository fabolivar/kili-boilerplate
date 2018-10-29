<?php
/*
Plugin Name:  Disallow Indexing
Plugin URI:   https://www.kiliframework.org/
Description:  Disallow indexing of your site on non-production environments.
Version:      1.0.0
Author:       Koombea
Author URI:   https://github.com/fabolivark/
License:      MIT License
*/

if (WP_ENV !== 'production' && !is_admin()) {
    add_action('pre_option_blog_public', '__return_zero');
}
