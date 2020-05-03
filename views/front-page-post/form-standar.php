<?php

if ( ! defined( 'ABSPATH' ) ) exit; 

/**
 * Register the form and fields for our front-end submission form
 */
function wds_frontend_form_register() {
    $cmb = new_cmb2_box( array(
        'id'           => 'front-end-post-form',
        'object_types' => array( 'post' ),
        'hookup'       => false,
        'save_fields'  => false,
    ) );

    $cmb->add_field( array(
        'name'    => __( 'New Post Title', 'wds-post-submit' ),
        'id'      => 'submitted_post_title',
        'type'    => 'text',
        'default' => __( 'New Post', 'wds-post-submit' ),
    ) );

    $cmb->add_field( array(
        'name'    => __( 'New Post Content', 'wds-post-submit' ),
        'id'      => 'submitted_post_content',
        'type'    => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 12,
            'media_buttons' => false,
        ),
    ) );

    $cmb->add_field( array(
        'name'       => __( 'Featured Image for New Post', 'wds-post-submit' ),
        'id'         => 'submitted_post_thumbnail',
        'type'       => 'text',
        'attributes' => array(
            'type' => 'file', // Let's use a standard file upload field
        ),
    ) );

    $cmb->add_field( array(
        'name' => __( 'Your Name', 'wds-post-submit' ),
        'desc' => __( 'Please enter your name for author credit on the new post.', 'wds-post-submit' ),
        'id'   => 'submitted_author_name',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name' => __( 'Your Email', 'wds-post-submit' ),
        'desc' => __( 'Please enter your email so we can contact you if we use your post.', 'wds-post-submit' ),
        'id'   => 'submitted_author_email',
        'type' => 'text_email',
    ) );

}
add_action( 'cmb2_init', 'wds_frontend_form_register' );