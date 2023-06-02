<?php
function _ch_insert_html_head() {
	echo ch_get_plugin_option('head_code');
}
add_action( 'wp_head', '_ch_insert_html_head', 9999);

function _ch_insert_html_footer() {
    echo ch_get_plugin_option('footer_code');
}
add_action( 'wp_footer', '_ch_insert_html_footer', 9999 );

function _ch_insert_html_body_open() {
    echo ch_get_plugin_option('body_open_code');
}
add_action( 'wp_body_open', '_ch_insert_html_body_open', 9999 );