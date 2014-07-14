<?php

add_action( 'init', 'fs_buttons' );
function fs_buttons() {
    add_filter( "mce_external_plugins", "fs_add_buttons" );
    add_filter( 'mce_buttons', 'fs_register_buttons' );
}
function fs_add_buttons( $plugin_array ) {
    $plugin_array['fs'] = get_stylesheet_directory_uri() . '/fs-editor-buttons/fs-plugin.js';
    return $plugin_array;
}
function fs_register_buttons( $buttons ) {
    array_push( $buttons, 'pdf-button');
    return $buttons;
}
