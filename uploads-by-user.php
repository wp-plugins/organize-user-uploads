<?php
/*
Plugin Name: Organize User Uploads
Plugin URI: http://wesleytodd.com/?custom-plugin=organize-user-uploads
Description: Organize Uploads by User Id
Author: Wes Todd
Version: 0.1
Author URI: http://wesleytodd.com
*/
add_filter('upload_dir', 'upByU_dir_filter');
function upByU_dir_filter($upload_dir) {

	wp_get_current_user();
	global $current_user;
	
	$upload_dir['subdir'] = '/'.$current_user->ID.$upload_dir['subdir'];
	$upload_dir['path'] = $upload_dir['basedir'].$upload_dir['subdir'];
	$upload_dir['url'] = $upload_dir['baseurl'].$upload_dir['subdir'];

	return $upload_dir;
}
?>