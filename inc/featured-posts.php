<?php

function crg_custom_meta() {
    add_meta_box( 'crg_meta', __( 'Featured Posts', 'crg' ), 'crg_meta_callback', 'portfolio' );
}
function crg_meta_callback( $post ) {
    $featured = get_post_meta( $post->ID );
    ?>
 
	<p>
    <div class="crg-row-content">
        <label for="meta-checkbox">
            <input type="checkbox" name="meta-checkbox" id="meta-checkbox" value="yes" <?php if ( isset ( $featured['meta-checkbox'] ) ) checked( $featured['meta-checkbox'][0], 'yes' ); ?> />
            <?php _e( 'Feature this post on the homepage', 'crg' )?>
        </label>
        
    </div>
</p>
 
    <?php
}
add_action( 'add_meta_boxes', 'crg_custom_meta' );

/**
 * Saves the custom meta input
 */
function crg_meta_save( $post_id ) {
 
    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'crg_nonce' ] ) && wp_verify_nonce( $_POST[ 'crg_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
 
 // Checks for input and saves
if( isset( $_POST[ 'meta-checkbox' ] ) ) {
    update_post_meta( $post_id, 'meta-checkbox', 'yes' );
} else {
    update_post_meta( $post_id, 'meta-checkbox', '' );
}
 
}
add_action( 'save_post', 'crg_meta_save' );
?>