<?php
/*
 * Plugin Name: scySVG
 * Plugin URI:  http://themehybrid.com/plugins/members
 * Description: Une extention fix erreurs SVG. Elle permet notamment d'upload des svg dans vos médias.
 * Version:     1.0.0
 * Author:      Scyllae
 * Author URI:  http://rageclic.fr    
 * Text Domain: scysvg
 *
 * @package   scySVG
 * @version   1.0.0
 * @author    Scyllae <contact@rageclic.fr>
 * @copyright Copyright (c) 2017 - 2018, Scyllae
 * @link      http://rageclic.fr                    
 *
 * Singleton class for setting up the plugin.
 *
 * @since  1.0.0
 * @access public
 */
function wp_get_attachment_image_src_callback_for_svg( $image, $attachment_id, $size ) {

        if( empty( $image ) || !is_array( $image ) ) { return null; }

        if ( !empty( $image ) ) {

                if( $image[1] == 0 ) {

                        $image[1] = 2000;

                }

        }
        return $image;

}
add_filter( 'wp_get_attachment_image_src', 'wp_get_attachment_image_src_callback_for_svg', 10, 3 );
?>
