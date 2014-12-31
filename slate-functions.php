<?php
/**
 * Slate Functions
 *
 * Utility functions and theme settings.
 *
 * @since 1.0
 *
 * @package WordPress
 * @subpackage Slate
 */

add_action('after_setup_theme', 'slate_theme_support');

/**
 * Sets theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook. This runs before the init
 * hook.
 *
 * @since 1.0
 */

function slate_theme_support() {

    /**
     * Register theme support for post thumbnails.
     */
    add_theme_support( 'post-thumbnails' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

}

/**
 * Simple error logging.
 *
 * Uses the system console to store debug information. Automatically parses arrays.
 *
 * @since 1.0
 *
 * @param int|string|array $input The debug information.
 *
 * @return int|string|array Returns information to the system console.
 */

function _log($input) {

    error_log(print_r($input, true));

}