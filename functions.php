<?php
// Load our style and scripts
function ac_load_assets(){
    wp_enqueue_script( 'ac_app_js', get_stylesheet_directory_uri() . '/assets/app.js', array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'ac_load_assets' );


function ac_change_login_form_info( $defaults ){
    $defaults['label_username'] = 'Enter your user info';
    $defaults['redirect'] = get_site_url() . '/sample-page';
    return $defaults;
}
add_filter( 'login_form_defaults', 'ac_change_login_form_info', 99, 1 );
// apply_filters( 'login_form_defaults', $defaults )


function ac_redirect_to_front(){
    if( $GLOBALS['pagenow'] === 'wp-login.php' ) {
        $url = get_site_url() . '/mypage';
        wp_redirect( $url );
        exit();
    }
}
// add_action( 'template_redirect', 'ac_redirect_to_front' );
ac_redirect_to_front();


// Including required file
require_once __DIR__ . '/inc/shortcodes.php';

// $url = get_template_directory(); // Main theme directory
// $url = get_stylesheet_directory(); // Child theme directory
// $url = get_stylesheet_directory_uri(); // Child theme directory
// $url = ABSPATH; // Wordpress root directory

// wp_die($url);