<?php
/*
Plugin Name: _Sandbox Alert
Description: Alert yourself to the fact that you're in your development area.
version: 1.0
Author Name: Tom de Bruin
Authort URI: http://deadlyhifi.com
*/

function dhf_sandbox_alert() {

	echo '<div class="sandbox" style="position:fixed;bottom:0;z-index:100;width:100%;background:rgb(203, 22, 6);color:white;padding:4px;text-align:center;">' . get_bloginfo('url') . '</div>';
}
add_action( 'wp_footer', 'dhf_sandbox_alert' );
?>