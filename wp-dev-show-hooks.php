<?php
/**
 * Plugin Name:       WP Developers Show Hooks
 * Plugin URI:        https://faus.to/wp-dev-show-hooks
 * Description:       Just prints all wordpress hooks.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Fausto Ruiz Madrid
 * Author URI:        https://faus.to
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wp-dev-show-hooks
 */
$debug_tags = array();
add_action( 'all', function ( $tag ) {
    global $debug_tags;
    if ( in_array( $tag, $debug_tags ) ) {
        return;
    }
    echo "<pre>" . $tag . "</pre>";
    $debug_tags[] = $tag;
} );
 ?>