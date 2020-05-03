<?php

if ( ! defined( 'ABSPATH' ) ) exit; 

require("front-page-post/form-standar.php");

/**
 * Handle the cmb-frontend-form shortcode
 *
 * @param  array  $atts Array of shortcode attributes
 * @return string       Form html
 */
function wds_do_frontend_form_submission_shortcode( $atts = array() ) {

    // Current user
    $user_id = get_current_user_id();

    // Use ID of metabox in wds_frontend_form_register
    $metabox_id = 'front-end-post-form';

    // since post ID will not exist yet, just need to pass it something
    $object_id  = 'fake-oject-id';

    // Get CMB2 metabox object
    $cmb = cmb2_get_metabox( $metabox_id, $object_id );

    // Get $cmb object_types
    $post_types = $cmb->prop( 'object_types' );

    // Parse attributes. These shortcode attributes can be optionally overridden.
    $atts = shortcode_atts( array(
        'post_author' => $user_id ? $user_id : 1, // Current user, or admin
        'post_status' => 'pending',
        'post_type'   => reset( $post_types ), // Only use first object_type in array
    ), $atts, 'cmb-frontend-form' );

    // Initiate our output variable
    $output = '';

    // Our CMB2 form stuff goes here

    return $output;
}
add_shortcode( 'cmb-frontend-form', 'wds_do_frontend_form_submission_shortcode' );