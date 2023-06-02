<?php
function _ch_require_my_file( $path = '', $return_path = false ) {
    $valid = validate_file( $path );

    if ( 0 === $valid || false === strpos( $path, '..' ) ) {
        if ( $return_path ) {
            $output = $path;
        } else {
            require_once( $path );
            $output = $valid;
        }
    } else {
        if ( $return_path ) {
            $output = '';
        } else {
            $output = $valid;
        }
    }

    return $output;
}

function ch_my_plugin_template( $path = '', $return_path = false ) {
    $path = CHETARU_PLUGIN_PATH . '/templates/' . $path;
    return _ch_require_my_file( $path, $return_path );
}


function ch_get_plugin_option( $key = '' ) {
    $options = get_option( 'chetaru_plugin_options');
	if( !empty($options) && ( $key !='' ) && ( array_key_exists($key,$options) ) ){
		return $options[$key];
	}
	return '';   
}