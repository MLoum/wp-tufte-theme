<?php
add_action( 'init', 'register_my_menu' );

function register_my_menu() {
register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

/* how to delete margin-top: 32px !important from twenty twelve */
function remove_admin_login_header() {
remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

//WordPress Titles
//add_theme_support( 'title-tag' );
?>


