<?php
/*
Plugin Name: Upload Name Hash
Description: Prepend a random string to media file uploads to prevent file name guessing.
Author: Nick Eyre
Version: 1.0.0
Author URI: http://nickeyre.com
*/

function upload_name_hash($arr) {
    $arr['name'] = hash('adler32',date('D, d M Y H:i:s').rand()).'-'.$arr['name'];
    return $arr;
}
add_filter('wp_handle_upload_prefilter', 'upload_name_hash', 1, 1);